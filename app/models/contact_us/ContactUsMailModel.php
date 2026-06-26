<?php
class ContactUsMailModel {
    private string $mailFrom;
    private string $mailFromName;
    private string $mailTo;
    private string $mailToName;
    private string $subject;
    private string $body;

    public function __construct(string $mailFrom, string $mailFromName, string $mailTo, string $mailToName, string $subject, string $body) {
        $this->mailFrom = $mailFrom;
        $this->mailFromName = $mailFromName;
        $this->mailTo = $mailTo;
        $this->mailToName = $mailToName;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function getMailFrom() {
        return $this->mailFrom;
    }

    public function getMailFromName() {
        return $this->mailFromName;
    }

    public function getMailTo() {
        return $this->mailTo;
    }

    public function getMailToName() {
        return $this->mailToName;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getBody() {
        return $this->body;
    }
}
