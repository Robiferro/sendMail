<?php

namespace App\GpecBundle\DTO;

class MailData
{
    private string $subject;
    private string $body;
    private string $to;
    private ?string $cc;
    private ?string $bcc;
    private string $priority;
    private bool $isBodyHtml;
    private string $user;
    private string $password;

    public function __construct(
        string $subject,
        string $body,
        string $to,
        ?string $cc = null,
        ?string $bcc = null,
        bool $isBodyHtml,
        string $priority = 'Normal',
        string $user,
        string $password
    ) {
        $this->subject = $subject;
        $this->body = $body;
        $this->to = $to;
        $this->cc = $cc;
        $this->bcc = $bcc;
        $this->isBodyHtml = $isBodyHtml;
        $this->priority = $priority;
        $this->user = $user;
        $this->password = $password;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getTo(): string
    {
        return $this->to;
    }

    public function getCc(): ?string
    {
        return $this->cc;
    }

    public function getBcc(): ?string
    {
        return $this->bcc;
    }

    public function isBodyHtml(): bool
    {
        return $this->isBodyHtml;
    }

    public function getPriority(): string
    {
        return $this->priority;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;
        return $this;
    }

    public function setTo(string $to): self
    {
        $this->to = $to;
        return $this;
    }

    public function setCc(?string $cc): self
    {
        $this->cc = $cc;
        return $this;
    }

    public function setBcc(?string $bcc): self
    {
        $this->bcc = $bcc;
        return $this;
    }

    public function setIsBodyHtml(bool $isBodyHtml): self
    {
        $this->isBodyHtml = $isBodyHtml;
        return $this;
    }

    public function setPriority(string $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }
}
