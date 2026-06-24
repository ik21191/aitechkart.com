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

    $contactUsModel = new ContactUsModel($username, $number, $email, $subject, $description);

    $contactUs = new ContactUs();
    $contactUs->insertContactUs($contactUsModel);

    $mailBody = '<h3>Dear Support Team</h3><p>You have received a query from below details.</p>
    <ul>
        <li><b>Name:</b> '.$username.'</li>
        <li><b>Number:</b> '.$number.'</li>
        <li><b>Email:</b> '.$email.'</li>
        <li><b>Subject:</b> '.$subject.'</li>
        <li><b>Description:</b> '.$description.'</li>
    </ul>';

    $contactUsMailModel = new ContactUsMailModel($envLoader->getProperty("MAIL_FROM"), $envLoader->getProperty("MAIL_TO"), $subject, $mailBody);
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
    $logger->error("Failed to decode JSON: " . json_last_error_msg());
    http_response_code(400);
    $response['status'] = 'error';
    $response['message'] = "Invalid JSON";
    echo json_encode($response);
}
