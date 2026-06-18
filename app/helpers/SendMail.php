<?php
require_once __DIR__ . "/../models/contact_us/ContactUsMailModel.php";

// Load dependencies managed by Composer
require __DIR__ . '/../../php/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/LoggerFactory.php';

class SendMail {
    private $smtpProvider = 'smtpout.secureserver.net';

    private ContactUsMailModel $contactUsMailModel;
    public function __construct(ContactUsMailModel $contactUsMailModel) {
        $this->contactUsMailModel = $contactUsMailModel;
    }

    public function sendMail(): bool
    {
        $logger = LoggerFactory::getLogger(__CLASS__);
        $logger->info("Sending mail to " . $this->contactUsMailModel->getSendTo());
        // Create an instance; passing 'true' enables structured error exceptions
        $mail = new PHPMailer(true);
        try {
            // 1. SMTP Server Settings Configuration
            $mail->isSMTP();                                                // Route email using SMTP
            $mail->Host       = $this->smtpProvider;
            $mail->SMTPAuth   = true;                                       // Activate SMTP authentication
            $mail->Username   = $this->contactUsMailModel->getFrom();       // Your SMTP account username
            $mail->Password   = 'Imran_Khan&0090';                          // Your SMTP account password or app-token
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             // Secure connection using TLS
            $mail->Port       = 587;                                        // TCP port connection (587 or 465)

            // 2. Sender and Recipient Address Management
            $mail->setFrom($this->contactUsMailModel->getFrom(), 'AI TechKart Contact Us'); // Define sender's email and name
            $mail->addAddress($this->contactUsMailModel->getSendTo(), 'Imran Khan');
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
            $logger->info("Mail sent successfully to " . $this->contactUsMailModel->getSendTo());
            return true;
        } catch (Exception $e) {
            $logger->error("Error while sending mail to " . $this->contactUsMailModel->getSendTo());
            $logger->error($e->getMessage());
            $logger->error($mail->ErrorInfo);
            return false;
        }
    }
}

?>
