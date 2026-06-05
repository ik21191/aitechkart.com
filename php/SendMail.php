<?php
// Load dependencies managed by Composer
require_once "ContactUsMailModel.php";
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SendMail {
    private $smtpProvider = 'smtpout.secureserver.net';             // Specify your SMTP provider host

    private ContactUsMailModel $contactUsMailModel;
    public function __construct(ContactUsMailModel $contactUsMailModel) {
        $this->contactUsMailModel = $contactUsMailModel;
    }

    public function sendMail()
    {
        try {
            // Create an instance; passing 'true' enables structured error exceptions
            $mail = new PHPMailer(true);
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
            echo 'Message has been successfully dispatched!';
        } catch (Exception $e) {
            echo "Exception {$e}";
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}



?>
