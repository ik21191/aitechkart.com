<?php
require_once "ContactUsModel.php";
require_once "ContactUs.php";
require_once "config.php";
require_once "ContactUsMailModel.php";
require_once "SendMail.php";


// Read raw POST data from the request body
$json = file_get_contents('php://input');

// Decode the JSON into a PHP associative array
$data = json_decode($json, true);

if ($data) {
    // Access individual fields
    $username = $data['name'] ?? 'Unknown';
    $email = $data['email'] ?? 'No email';
    $subject = $data['subject'] ?? 'No subject';
    $description = $data['description'] ?? 'No Description';

    $contactUsModel = new ContactUsModel($username, $email, $subject, $description);

    $contactUs = new ContactUs();
    $contactUs->insertContactUs($contactUsModel);

    // Send a JSON response back to the client
    echo json_encode([
        "status" => "success",
        "message" => "Thanks for contacting us, we will revert you soon."
    ]);

    $mailBody = '<h3>Hello Support</h3><p>You have received a newe query from below details.</p>
    <ul>
        <li><b>Name:</b> '.$username.'</li>
        <li><b>Email:</b> '.$email.'</li>
        <li><b>Subject:</b> '.$subject.'</li>
        <li><b>Description:</b> '.$description.'</li>
    </ul>';

    //TODO : Get mobile number from form and pass it to constructor
    $contactUsMailModel = new ContactUsMailModel("contact@aitechkart.com", "contact@aitechkart.com", $subject, $mailBody, "1234567890");
    $sendMail = new SendMail($contactUsMailModel);
    $sendMail->sendMail();
} else {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid JSON"]);
}
