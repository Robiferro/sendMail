<?php

namespace Gpec\GpecBundle\Type;

class ArrayOfAttachment
{
    /**
     * @var null | array<int<0,max>, \Gpec\GpecBundle\Type\Attachment>
     */
    private ?array $Attachment = null;

    /**
     * @return null | array<int<0,max>, \Gpec\GpecBundle\Type\Attachment>
     */
    public function getAttachment() : ?array
    {
        return $this->Attachment;
    }

    /**
     * @param null | array<int<0,max>, \Gpec\GpecBundle\Type\Attachment> $Attachment
     * @return static
     */
    public function withAttachment(?array $Attachment) : static
    {
        $new = clone $this;
        $new->Attachment = $Attachment;

        return $new;
    }
}

