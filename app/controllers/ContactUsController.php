<?php
require __DIR__ . "/../../app/bootstrap/bootstrap.php";
require_once PROJECT_ROOT_PATH . "/app/db/config.php";
require_once __DIR__ . '/../db/Database.php';
require_once __DIR__ . '/../helpers/LoggerFactory.php';
require_once __DIR__ . '/../helpers/SendMail.php';
require_once __DIR__ . '/../models/contact_us/ContactUsMailModel.php';

class ContactUsController extends Database
{
    public function verifyEmail()
    {
        $envLoader = EnvLoader::getInstance();
        $logger = LoggerFactory::getLogger(__CLASS__);

        $activation_code = $_GET['activation_code'] ?? null;

        $response_code = 404; //No token provided
        $response = '';
        try {
            if ($activation_code) {
                $logger->info("Verifying activation code " . $activation_code);
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

                    $logger->info("Your {$contactUs['email']} has been successfully verified.");

                    //Notify Contact us team
                    $mailBody = '<p>Dear Team</p>
                    <p>The email address '.$contactUs['email'] .'is verified.</p>';

                    $contactUsMailModel = new ContactUsMailModel($envLoader->getProperty("MAIL_FROM"), $envLoader->getProperty("MAIL_FROM_NAME"), 
                    $envLoader->getProperty("MAIL_TO"), $envLoader->getProperty("MAIL_TO_NAME"), 
                    'Action required', $mailBody);
    
                    $sendMail = new SendMail($contactUsMailModel);
                    if (!$sendMail->sendMail()) {
                        $response_code = 203;
                    } 

                    $response_code = 200; //Token verified
                    $response = "Your email has been verified successfully";
                } else {
                    $response_code = 500; // token expired or invalid
                    $response = 'Invalid or expired verification token.';
                    $logger->error("Invalid or expired verification token.");
                }
            } else {
                $logger->error("No token provided.");
                $response = 'No token provided';
            }
        } catch (Exception $e) {
            $logger->error("There is some issue verifying activation code " . $e->getMessage());
            $response = 'There is some issue verifying your email, please try again.';
        }
        require_once __DIR__ . '/../views/generic-response.php';
    }
}
