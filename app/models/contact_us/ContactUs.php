<?php
require_once __DIR__ . "/../../db/Database.php";
require_once "ContactUsModel.php";

class ContactUs extends Database
{
    public function insertContactUs(ContactUsModel $contactUsModel)
    {
        try {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("INSERT INTO contact_us (name, number, email, subject, description, verification_token, token_expires_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
            
            $name = $contactUsModel->getName();
            $number = $contactUsModel->getNumber();
            $email = $contactUsModel->getEmail();
            $subject = $contactUsModel->getSubject();
            $description = $contactUsModel->getDescription();
            $verification_token = $contactUsModel->getHashedToken();
            $token_expires_at = $contactUsModel->getExpiresAt();       

            $stmt->execute([$name, $number, $email, $subject, $description, $verification_token, $token_expires_at]);
            return true;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function isUserEmailActivated(string $email) :bool
    {
        $flag = false;
        try {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("SELECT COUNT(*) FROM contact_us WHERE email = ? AND is_verified = 1");
            $stmt->execute([$email]);
            $rowCount = $stmt->fetchColumn();
            if ($rowCount > 0) {
                $flag = true;
            }
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }
        return $flag;
    }
}
