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

header('Content-Type: application/json');
$response = [];

if ($data) {
    // Access individual fields
    $username = $data['name'] ?? 'Unknown';
    $email = $data['email'] ?? 'No email';
    $subject = $data['subject'] ?? 'No subject';
    $description = $data['description'] ?? 'No Description';

    $contactUsModel = new ContactUsModel($username, $email, $subject, $description);

    $contactUs = new ContactUs();
    $contactUs->insertContactUs($contactUsModel);

    $mailBody = '<h3>Dear Support Team</h3><p>You have received a query from below details.</p>
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

    $response['status'] = 'success';
    $response['message'] = "We will get back to you with your query as soon as possible.";
    echo json_encode($response);
    exit;
} else {
    http_response_code(400);
    $response['status'] = 'error';
    $response['message'] = "Invalid JSON";
    echo json_encode($response);
}
