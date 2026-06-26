<?php

use Monolog\Logger;

require __DIR__ . "/../../app/bootstrap/bootstrap.php";
require_once PROJECT_ROOT_PATH . "/app/db/config.php";
require_once __DIR__ . '/../db/Database.php';
require_once __DIR__ . '/../helpers/LoggerFactory.php';
require_once __DIR__ . '/../helpers/SendMail.php';
require_once __DIR__ . '/../models/contact_us/ContactUsMailModel.php';
require_once __DIR__ . '/../models/contact_us/ContactUs.php';

class ContactUsController extends Database
{
    private Logger $logger;
    private EnvLoader $envLoader;
    public function __construct()
    {
        parent::__construct();
        $this->logger = LoggerFactory::getLogger(__CLASS__);
        $this->envLoader = EnvLoader::getInstance();
    }

    //POST: method
    public function index()
    {
        // Read raw POST data from the request body
        $json = file_get_contents('php://input');

        // Decode the JSON into a PHP associative array
        $data = json_decode($json, true);

        header('Content-Type: application/json');
        $response = [];

        if ($data) {
            $this->logger->info("Received contact us query: " . json_encode($data));
            // Access individual fields
            $unknown = 'Unknown';
            $username = $data['name'] ?? $unknown;
            $number = $data['number'] ?? $unknown;
            $email = $data['email'] ?? $unknown;
            $subject = $data['subject'] ?? $unknown;
            $description = $data['description'] ?? $unknown;

            //Check if user is already activated
            //If user is activated then send a mail to "AI TechKart" team about his query
            $this->logger->info("Verifying is {$email} activated...");

            $contactUs = new ContactUs();
            $isEmailActivated = $contactUs->isUserEmailActivated($email);

            if ($isEmailActivated) {
                //Email is activated, sending query to contact us
                $this->logger->info("{$email} is activated, sending query to Contact Us Team");
                $this->sendMailToContactUs($username, $number, $email, $subject, $description);
            } else {
                //Email is not activated, sending activation link
                $this->sendActivationLink($username, $number, $email, $subject, $description);
            }
        } else {
            $this->logger->error("Failed to decode JSON: " . json_last_error_msg());
            http_response_code(400);
            $response['status'] = 'error';
            $response['message'] = "Invalid JSON";
            echo json_encode($response);
        }
    }

    //GET Request
    public function verifyEmail()
    {
        $activation_code = $_GET['activation_code'] ?? null;

        $response = '';
        try {
            if ($activation_code) {
                $this->logger->info("Verifying activation code " . $activation_code);
                $hashedToken = hash('sha256', $activation_code);
                $currentTime = date('Y-m-d H:i:s');
                // Look up the token and ensure it hasn't expired
                $connection = $this->getConnection();

                $stmt = $connection->prepare("SELECT * FROM contact_us WHERE verification_token = ? AND token_expires_at > ? AND is_verified = 0");
                $stmt->execute([$hashedToken, $currentTime]);
                $contactUs = $stmt->fetch();

                if ($contactUs) {
                    // Update user status and clear token data
                    $updateStmt = $connection->prepare("UPDATE contact_us SET is_verified = 1, verification_token = NULL, token_expires_at = NULL WHERE id = ?");
                    $updateStmt->execute([$contactUs['id']]);

                    $this->logger->info("Your {$contactUs['email']} has been successfully verified.");

                    //Notify Contact us team
                    $mailBody = '<p>Dear Team</p>
                    <p>The email address ' . $contactUs['email'] . ' is verified.</p>';

                    $contactUsMailModel = new ContactUsMailModel(
                        $this->envLoader->getProperty("MAIL_FROM"),
                        $this->envLoader->getProperty("MAIL_FROM_NAME"),
                        $this->envLoader->getProperty("MAIL_TO"),
                        $this->envLoader->getProperty("MAIL_TO_NAME"),
                        'Action required',
                        $mailBody
                    );

                    $sendMail = new SendMail($contactUsMailModel);
                    if (!$sendMail->sendMail()) {
                        $response_code = 203;
                    }

                    $response = "Your email has been verified successfully";
                } else {
                    $response = 'Invalid or expired verification token.';
                    $this->logger->error("Invalid or expired verification token.");
                }
            } else {
                $this->logger->error("No token provided.");
                $response = 'No token provided';
            }
        } catch (Exception $e) {
            $this->logger->error("There is some issue verifying activation code " . $e->getMessage());
            $response = 'There is some issue verifying your email, please try again.';
        }
        require_once __DIR__ . '/../views/generic-response.php';
    }

    private function sendMailToContactUs(string $username, string $number, string $email, string $subject, string $description)
    {
        $mailBody = '<h3>Dear Support Team</h3><p>You have received a query from below details.</p>
        <ul>
            <li><b>Name:</b> ' . $username . '</li>
            <li><b>Number:</b> ' . $number . '</li>
            <li><b>Email:</b> ' . $email . '</li>
            <li><b>Subject:</b> ' . $subject . '</li>
            <li><b>Description:</b> ' . $description . '</li>
        </ul>';

        $contactUsMailModel = new ContactUsMailModel(
            $this->envLoader->getProperty("MAIL_FROM"),
            $this->envLoader->getProperty("MAIL_FROM_NAME"),
            $this->envLoader->getProperty("MAIL_TO"),
            $this->envLoader->getProperty("MAIL_TO_NAME"),
            $subject,
            $mailBody
        );

        $sendMail = new SendMail($contactUsMailModel);
        if ($sendMail->sendMail()) {
            http_response_code(200);
            $response['status'] = 'success';
            $response['message'] = "We will get back to you with your query as soon as possible.";
            echo json_encode($response);
        } else {
            http_response_code(503);
            $response['status'] = 'error';
            $response['message'] = "There is some issue connecting with the backend server. Please try again later.";
            echo json_encode($response);
        }
        exit;
    }

    private function sendActivationLink(string $username, string $number, string $email, string $subject, string $description)
    {
        // 1. Generate a raw random token and its database hash
        $rawToken = bin2hex(random_bytes(32));
        $hashedToken = hash('sha256', $rawToken);

        // 2. Set expiration (e.g., 48 hours from now)
        $expiresAt = date('Y-m-d H:i:s', strtotime('+48 hours'));

        $contactUsModel = new ContactUsModel($username, $number, $email, $subject, $description, $hashedToken, $expiresAt);

        $contactUs = new ContactUs();
        $contactUs->insertContactUs($contactUsModel);

        // 1. Fetch template structure from file
        $emailTemplatePath = $_SERVER['DOCUMENT_ROOT'] . $this->envLoader->getProperty("EMAIL_TEMPLATE_FOLDER_LOCATION") . 'email-confirmation.html';
        if (!file_exists($emailTemplatePath)) {
            $this->logger->error("Error: Template file missing. " . $emailTemplatePath);
            die(500);
        }

        $email_html = file_get_contents($emailTemplatePath);

        $verificationLink = $this->envLoader->getProperty("DOMAIN_URL") . '/verify-email?activation_code=' . $rawToken;

        // 2. Define key-value mappings for content injection
        $placeholders = [
            '{{TITLE}}'     => "Account Verification",
            '{{NAME}}'      => htmlspecialchars($username),
            '{{CTA_URL}}'   => $verificationLink,
            '{{CTA_TEXT}}'  => "Click Here To Verify Your Email"
        ];

        // 3. Inject variables into placeholders
        $mailBody = str_replace(array_keys($placeholders), array_values($placeholders), $email_html);

        $contactUsMailModel = new ContactUsMailModel($this->envLoader->getProperty("MAIL_FROM"), $this->envLoader->getProperty("MAIL_FROM_NAME"), $email, $email, 'Verify your email address', $mailBody);

        $sendMail = new SendMail($contactUsMailModel);
        if ($sendMail->sendMail()) {
            http_response_code(200);
            $response['status'] = 'success';
            $response['message'] = "A verification link has been sent your email address, we will revert to your query post verification.";
            echo json_encode($response);
        } else {
            http_response_code(503);
            $response['status'] = 'error';
            $response['message'] = "There is some issue connecting with the backend server. Please try again later.";
            echo json_encode($response);
        }
        exit;
    }
}
