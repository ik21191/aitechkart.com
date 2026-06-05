<?php
class ContactUsMailModel {
    private string $from;
    private string $sendTo;
    private string $subject;
    private string $body;
    private string $mobile;

    public function __construct(string $from, string $sendTo, string $subject, string $body, string $mobile) {
        $this->from = $from;
        $this->sendTo = $sendTo;
        $this->subject = $subject;
        $this->body = $body;
        $this->mobile = $mobile;
    }

    public function getFrom() {
        return $this->from;
    }

    public function getSendTo() {
        return $this->sendTo;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getBody() {
        return $this->body;
    }

    public function getMobile() {
        return $this->mobile;
    }
}
