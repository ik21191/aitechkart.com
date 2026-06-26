<?php
require_once __DIR__ . "/../models/contact_us/ContactUsMailModel.php";

// Load dependencies managed by Composer
require __DIR__ . '/../../php/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/LoggerFactory.php';
require_once __DIR__ . '/EnvLoader.php';

class SendMail
{
    private ContactUsMailModel $contactUsMailModel;
    public function __construct(ContactUsMailModel $contactUsMailModel)
    {
        $this->contactUsMailModel = $contactUsMailModel;
    }

    public function sendMail(): bool
    {
        $envLoader = EnvLoader::getInstance();
        $logger = LoggerFactory::getLogger(__CLASS__);
        $logger->info("Sending mail to " . $this->contactUsMailModel->getMailTo());
        // Create an instance; passing 'true' enables structured error exceptions

        $maxTries = 3;
        $attempts = 0;
        $mailSent = false;
        while ($attempts < $maxTries && !$mailSent) {
            $attempts++;

            $mail = new PHPMailer(true);
            try {
                // 1. SMTP Server Settings Configuration
                // Route email using SMTP
                $mail->isSMTP();
                $mail->Host = $envLoader->getProperty("MAIL_SMTP_PROVIDER");
                // Activate SMTP authentication
                $mail->SMTPAuth = true;
                // Your SMTP account username
                $mail->Username = $this->contactUsMailModel->getMailFrom();
                // Your SMTP account password or app-token       
                $mail->Password = $envLoader->getProperty("MAIL_PASSWORD");
                // Secure connection using TLS                        
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                // TCP port connection (587 or 465)          
                $mail->Port = $envLoader->getProperty("MAIL_SMTP_PORT");

                // 2. Sender and Recipient Address Management
                $mail->setFrom($this->contactUsMailModel->getMailFrom(), $this->contactUsMailModel->getMailFromName()); // Define sender's email and name
                $mail->addAddress($this->contactUsMailModel->getMailTo(), $this->contactUsMailModel->getMailTo());
                //$mail->addReplyTo('info@example.com', 'Information Desk');

                // 3. Optional: Incorporating File Attachments
                // $mail->addAttachment('/path/to/document.pdf');          // Attach a local system file

                // 4. Content Formatting (HTML and Text Fallback)
                $mail->isHTML(true);                                        // Format email structure as HTML
                $mail->Subject = $this->contactUsMailModel->getSubject();
                $mail->Body    = $this->contactUsMailModel->getBody();
                //$mail->AltBody = 'Hello World! This is the plain text fallback for older email clients.';

                // 5. Fire dispatch action
                $mail->send();
                $logger->info("Mail sent successfully to " . $this->contactUsMailModel->getMailTo());
                $mailSent = true;
            } catch (Exception $e) {
                $logger->error("Error while sending mail to " . $this->contactUsMailModel->getMailTo());
                $logger->error($e->getMessage());
                $logger->error($mail->ErrorInfo);
                if ($attempts >= $maxTries) {
                    $logger->error("Email failed after {$maxTries} attempts. Last Error: " . $mail->ErrorInfo);
                }
                // Wait before trying again (avoid overloading the server)
                sleep(2); 
            }
        }
        return $mailSent;
    }
}
