<?php

namespace App\GpecBundle\Type;

class ArrayOfAttachment
{
    /**
     * @var null | array<int<0,max>, \App\GpecBundle\Type\Attachment>
     */
    private ?array $Attachment = null;

    /**
     * @return null | array<int<0,max>, \App\GpecBundle\Type\Attachment>
     */
    public function getAttachment() : ?array
    {
        return $this->Attachment;
    }

    /**
     * @param null | array<int<0,max>, \App\GpecBundle\Type\Attachment> $Attachment
     * @return static
     */
    public function withAttachment(?array $Attachment) : static
    {
        $new = clone $this;
        $new->Attachment = $Attachment;

        return $new;
    }
}

