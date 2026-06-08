<?php
require_once "Database.php";
require_once "ContactUsModel.php";

class ContactUs extends Database
{
    public function insertContactUs(ContactUsModel $contactUsModel)
    {
        try {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("INSERT INTO contact_us (name, number, email, subject, description) VALUES (?, ?, ?, ?, ?)");
            $name = $contactUsModel->getName();
            $number = $contactUsModel->getNumber();
            $email = $contactUsModel->getEmail();
            $subject = $contactUsModel->getSubject();
            $description = $contactUsModel->getDescription();       

            $stmt->bind_param("sssss", $name, $number, $email, $subject, $description);
            $stmt->execute();
            $stmt->close();
            return true;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
