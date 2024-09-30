<?php

namespace App\GpecBundle\Type;

class AttachmentSet
{
    /**
     * @var null | \App\GpecBundle\Type\ArrayOfAttachment
     */
    private ?\App\GpecBundle\Type\ArrayOfAttachment $attachments = null;

    /**
     * @return null | \App\GpecBundle\Type\ArrayOfAttachment
     */
    public function getAttachments() : ?\App\GpecBundle\Type\ArrayOfAttachment
    {
        return $this->attachments;
    }

    /**
     * @param null | \App\GpecBundle\Type\ArrayOfAttachment $attachments
     * @return static
     */
    public function withAttachments(?\App\GpecBundle\Type\ArrayOfAttachment $attachments) : static
    {
        $new = clone $this;
        $new->attachments = $attachments;

        return $new;
    }
}

