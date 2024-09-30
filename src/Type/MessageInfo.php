<?php

namespace App\GpecBundle\Type;

use \App\GpecBundle\Type\MessageInfoSender;

class MessageInfo extends MessageInfoSender
{
    /**
     * @var null | string
     */
    private ?string $sender = null;

    /**
     * @var 'Sending' | 'Sent' | 'Retrying' | 'Delivered' | 'Accepted' | 'Error' | 'Received' | 'Unknown'
     */
    private string $mailStatus;

    /**
     * @var array<int<0,max>, string>
     */
    private array $deliveryNotificationOptions;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $submissionDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $sentDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $acceptedDate = null;

    /**
     * @var null | string
     */
    private ?string $id = null;

    /**
     * @return null | string
     */
    public function getSender() : ?string
    {
        return $this->sender;
    }

    /**
     * @param null | string $sender
     * @return static
     */
    public function withSender(?string $sender) : static
    {
        $new = clone $this;
        $new->sender = $sender;

        return $new;
    }

    /**
     * @return 'Sending' | 'Sent' | 'Retrying' | 'Delivered' | 'Accepted' | 'Error' | 'Received' | 'Unknown'
     */
    public function getMailStatus() : string
    {
        return $this->mailStatus;
    }

    /**
     * @param 'Sending' | 'Sent' | 'Retrying' | 'Delivered' | 'Accepted' | 'Error' | 'Received' | 'Unknown' $mailStatus
     * @return static
     */
    public function withMailStatus(string $mailStatus) : static
    {
        $new = clone $this;
        $new->mailStatus = $mailStatus;

        return $new;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getDeliveryNotificationOptions() : array
    {
        return $this->deliveryNotificationOptions;
    }

    /**
     * @param array<int<0,max>, string> $deliveryNotificationOptions
     * @return static
     */
    public function withDeliveryNotificationOptions(array $deliveryNotificationOptions) : static
    {
        $new = clone $this;
        $new->deliveryNotificationOptions = $deliveryNotificationOptions;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getSubmissionDate() : ?\DateTimeInterface
    {
        return $this->submissionDate;
    }

    /**
     * @param null | \DateTimeInterface $submissionDate
     * @return static
     */
    public function withSubmissionDate(?\DateTimeInterface $submissionDate) : static
    {
        $new = clone $this;
        $new->submissionDate = $submissionDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getSentDate() : ?\DateTimeInterface
    {
        return $this->sentDate;
    }

    /**
     * @param null | \DateTimeInterface $sentDate
     * @return static
     */
    public function withSentDate(?\DateTimeInterface $sentDate) : static
    {
        $new = clone $this;
        $new->sentDate = $sentDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getAcceptedDate() : ?\DateTimeInterface
    {
        return $this->acceptedDate;
    }

    /**
     * @param null | \DateTimeInterface $acceptedDate
     * @return static
     */
    public function withAcceptedDate(?\DateTimeInterface $acceptedDate) : static
    {
        $new = clone $this;
        $new->acceptedDate = $acceptedDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @param null | string $id
     * @return static
     */
    public function withId(?string $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }
}

