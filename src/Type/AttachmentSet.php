<?php

namespace Gpec\GpecBundle\Type;

class AttachmentSet
{
    /**
     * @var null | \Gpec\GpecBundle\Type\ArrayOfAttachment
     */
    private ?\Gpec\GpecBundle\Type\ArrayOfAttachment $attachments = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\ArrayOfAttachment
     */
    public function getAttachments() : ?\Gpec\GpecBundle\Type\ArrayOfAttachment
    {
        return $this->attachments;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\ArrayOfAttachment $attachments
     * @return static
     */
    public function withAttachments(?\Gpec\GpecBundle\Type\ArrayOfAttachment $attachments) : static
    {
        $new = clone $this;
        $new->attachments = $attachments;

        return $new;
    }
}

