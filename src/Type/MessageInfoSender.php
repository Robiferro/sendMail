<?php

namespace Gpec\GpecBundle\Type;

class MessageInfoSender
{
    /**
     * @var null | string
     */
    private ?string $to = null;

    /**
     * @var null | string
     */
    private ?string $cc = null;

    /**
     * @var null | string
     */
    private ?string $bcc = null;

    /**
     * @var 'ASCII' | 'UTF7' | 'UTF8' | 'Unicode' | 'UTF32'
     */
    private string $subjectEncoding;

    /**
     * @var null | string
     */
    private ?string $subject = null;

    /**
     * @var 'ASCII' | 'UTF7' | 'UTF8' | 'Unicode' | 'UTF32'
     */
    private string $bodyEncoding;

    /**
     * @var bool
     */
    private bool $isBodyHtml;

    /**
     * @var null | string
     */
    private ?string $body = null;

    /**
     * @var 'Low' | 'Normal' | 'High'
     */
    private string $priority;

    /**
     * @var null | \Gpec\GpecBundle\Type\AttachmentSet
     */
    private ?\Gpec\GpecBundle\Type\AttachmentSet $attachments = null;

    /**
     * @var null | \Gpec\GpecBundle\Type\ArrayOfObjectHeaders
     */
    private ?\Gpec\GpecBundle\Type\ArrayOfObjectHeaders $headers = null;

    /**
     * @var 'ASCII' | 'UTF7' | 'UTF8' | 'Unicode' | 'UTF32'
     */
    private string $headersEncoding;

    /**
     * @return null | string
     */
    public function getTo() : ?string
    {
        return $this->to;
    }

    /**
     * @param null | string $to
     * @return static
     */
    public function withTo(?string $to) : static
    {
        $new = clone $this;
        $new->to = $to;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCc() : ?string
    {
        return $this->cc;
    }

    /**
     * @param null | string $cc
     * @return static
     */
    public function withCc(?string $cc) : static
    {
        $new = clone $this;
        $new->cc = $cc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBcc() : ?string
    {
        return $this->bcc;
    }

    /**
     * @param null | string $bcc
     * @return static
     */
    public function withBcc(?string $bcc) : static
    {
        $new = clone $this;
        $new->bcc = $bcc;

        return $new;
    }

    /**
     * @return 'ASCII' | 'UTF7' | 'UTF8' | 'Unicode' | 'UTF32'
     */
    public function getSubjectEncoding() : string
    {
        return $this->subjectEncoding;
    }

    /**
     * @param 'ASCII' | 'UTF7' | 'UTF8' | 'Unicode' | 'UTF32' $subjectEncoding
     * @return static
     */
    public function withSubjectEncoding(string $subjectEncoding) : static
    {
        $new = clone $this;
        $new->subjectEncoding = $subjectEncoding;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSubject() : ?string
    {
        return $this->subject;
    }

    /**
     * @param null | string $subject
     * @return static
     */
    public function withSubject(?string $subject) : static
    {
        $new = clone $this;
        $new->subject = $subject;

        return $new;
    }

    /**
     * @return 'ASCII' | 'UTF7' | 'UTF8' | 'Unicode' | 'UTF32'
     */
    public function getBodyEncoding() : string
    {
        return $this->bodyEncoding;
    }

    /**
     * @param 'ASCII' | 'UTF7' | 'UTF8' | 'Unicode' | 'UTF32' $bodyEncoding
     * @return static
     */
    public function withBodyEncoding(string $bodyEncoding) : static
    {
        $new = clone $this;
        $new->bodyEncoding = $bodyEncoding;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsBodyHtml() : bool
    {
        return $this->isBodyHtml;
    }

    /**
     * @param bool $isBodyHtml
     * @return static
     */
    public function withIsBodyHtml(bool $isBodyHtml) : static
    {
        $new = clone $this;
        $new->isBodyHtml = $isBodyHtml;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBody() : ?string
    {
        return $this->body;
    }

    /**
     * @param null | string $body
     * @return static
     */
    public function withBody(?string $body) : static
    {
        $new = clone $this;
        $new->body = $body;

        return $new;
    }

    /**
     * @return 'Low' | 'Normal' | 'High'
     */
    public function getPriority() : string
    {
        return $this->priority;
    }

    /**
     * @param 'Low' | 'Normal' | 'High' $priority
     * @return static
     */
    public function withPriority(string $priority) : static
    {
        $new = clone $this;
        $new->priority = $priority;

        return $new;
    }

    /**
     * @return null | \Gpec\GpecBundle\Type\AttachmentSet
     */
    public function getAttachments() : ?\Gpec\GpecBundle\Type\AttachmentSet
    {
        return $this->attachments;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\AttachmentSet $attachments
     * @return static
     */
    public function withAttachments(?\Gpec\GpecBundle\Type\AttachmentSet $attachments) : static
    {
        $new = clone $this;
        $new->attachments = $attachments;

        return $new;
    }

    /**
     * @return null | \Gpec\GpecBundle\Type\ArrayOfObjectHeaders
     */
    public function getHeaders() : ?\Gpec\GpecBundle\Type\ArrayOfObjectHeaders
    {
        return $this->headers;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\ArrayOfObjectHeaders $headers
     * @return static
     */
    public function withHeaders(?\Gpec\GpecBundle\Type\ArrayOfObjectHeaders $headers) : static
    {
        $new = clone $this;
        $new->headers = $headers;

        return $new;
    }

    /**
     * @return 'ASCII' | 'UTF7' | 'UTF8' | 'Unicode' | 'UTF32'
     */
    public function getHeadersEncoding() : string
    {
        return $this->headersEncoding;
    }

    /**
     * @param 'ASCII' | 'UTF7' | 'UTF8' | 'Unicode' | 'UTF32' $headersEncoding
     * @return static
     */
    public function withHeadersEncoding(string $headersEncoding) : static
    {
        $new = clone $this;
        $new->headersEncoding = $headersEncoding;

        return $new;
    }
}

