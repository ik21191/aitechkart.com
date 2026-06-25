<?php
require __DIR__ . "/../app/bootstrap/bootstrap.php";
require_once PROJECT_ROOT_PATH . "/app/models/contact_us/ContactUsModel.php";
require_once PROJECT_ROOT_PATH . "/app/models/contact_us/ContactUs.php";
require_once PROJECT_ROOT_PATH . "/app/db/config.php";
require_once PROJECT_ROOT_PATH . "/app/models/contact_us/ContactUsMailModel.php";
require_once PROJECT_ROOT_PATH . "/app/helpers/SendMail.php";

require_once __DIR__ . '/../app/helpers/LoggerFactory.php';
require_once __DIR__ . '/../app/helpers/EnvLoader.php';

$logger = LoggerFactory::getLogger(__FILE__);
$envLoader = EnvLoader::getInstance();


// Read raw POST data from the request body
$json = file_get_contents('php://input');

// Decode the JSON into a PHP associative array
$data = json_decode($json, true);

header('Content-Type: application/json');
$response = [];

if ($data) {
    $logger->info("Received contact us query: " . json_encode($data));
    // Access individual fields
    $unknown = 'Unknown';
    $username = $data['name'] ?? $unknown;
    $number = $data['number'] ?? $unknown;
    $email = $data['email'] ?? $unknown;
    $subject = $data['subject'] ?? $unknown;
    $description = $data['description'] ?? $unknown;

    //Check if user is already activated
    //If user is activated then send a mail to "AI TechKart" team about his query
    $logger->info("Verifying is {$email} activated...");

    $contactUs = new ContactUs();
    $isEmailActivated = $contactUs->isUserEmailActivated($email);

    if ($isEmailActivated) {
        $logger->info("{$email} is activated, sending query to Contact Us Team");

        $mailBody = '<h3>Dear Support Team</h3><p>You have received a query from below details.</p>
        <ul>
            <li><b>Name:</b> ' . $username . '</li>
            <li><b>Number:</b> ' . $number . '</li>
            <li><b>Email:</b> ' . $email . '</li>
            <li><b>Subject:</b> ' . $subject . '</li>
            <li><b>Description:</b> ' . $description . '</li>
        </ul>';

        $contactUsMailModel = new ContactUsMailModel(
            $envLoader->getProperty("MAIL_FROM"),
            $envLoader->getProperty("MAIL_FROM_NAME"),
            $envLoader->getProperty("MAIL_TO"),
            $envLoader->getProperty("MAIL_TO_NAME"),
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
    } else {
        // 1. Generate a raw random token and its database hash
        $rawToken = bin2hex(random_bytes(32));
        $hashedToken = hash('sha256', $rawToken);

        // 2. Set expiration (e.g., 48 hours from now)
        $expiresAt = date('Y-m-d H:i:s', strtotime('+48 hours'));

        $contactUsModel = new ContactUsModel($username, $number, $email, $subject, $description, $hashedToken, $expiresAt);

        $contactUs = new ContactUs();
        $contactUs->insertContactUs($contactUsModel);

        // 1. Fetch template structure from file
        $emailTemplatePath = $_SERVER['DOCUMENT_ROOT'] . $envLoader->getProperty("EMAIL_TEMPLATE_FOLDER_LOCATION") .'email-confirmation.html';
        if (!file_exists($emailTemplatePath)) {
            $logger->error("Error: Template file missing. " . $emailTemplatePath);
            die(500);
        }
        
        $email_html = file_get_contents($emailTemplatePath);

        $verificationLink = $envLoader->getProperty("DOMAIN_URL") . '/verify-email?activation_code=' . $rawToken;

        // 2. Define key-value mappings for content injection
        $placeholders = [
            '{{TITLE}}'     => "Account Verification",
            '{{NAME}}'      => htmlspecialchars($username),
            '{{CTA_URL}}'   => $verificationLink,
            '{{CTA_TEXT}}'  => "Click Here To Verify Your Email"
        ];

        // 3. Inject variables into placeholders
        $mailBody = str_replace(array_keys($placeholders), array_values($placeholders), $email_html);

        $contactUsMailModel = new ContactUsMailModel($envLoader->getProperty("MAIL_FROM"), $envLoader->getProperty("MAIL_FROM_NAME"), $email, $email, 'Verify your email address', $mailBody);

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
} else {
    $logger->error("Failed to decode JSON: " . json_last_error_msg());
    http_response_code(400);
    $response['status'] = 'error';
    $response['message'] = "Invalid JSON";
    echo json_encode($response);
}
