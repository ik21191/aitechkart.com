<?php
class ContactUsModel {
    private string $name;
    private string $number;
    private string $email;
    private string $subject;
    private string $description;
    private string $hashedToken;
    private string $expiresAt;

    public function __construct(string $name, string $number, string $email, string $subject, string $description, string $hashedToken, string $expiresAt) {
        $this->name = $name;
        $this->number = $number;
        $this->email = $email;
        $this->subject = $subject;
        $this->description = $description;
        $this->hashedToken = $hashedToken;
        $this-> expiresAt = $expiresAt;
    }

    public function getName() {
        return $this->name;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getHashedToken() {
        return $this->hashedToken;
    }

    public function getExpiresAt() {
        return $this->expiresAt;
    }
}
