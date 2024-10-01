<?php

namespace Gpec\GpecBundle\Type;

class ArrayOfMessageInfo
{
    /**
     * @var null | array<int<0,max>, \Gpec\GpecBundle\Type\MessageInfo>
     */
    private ?array $MessageInfo = null;

    /**
     * @return null | array<int<0,max>, \Gpec\GpecBundle\Type\MessageInfo>
     */
    public function getMessageInfo() : ?array
    {
        return $this->MessageInfo;
    }

    /**
     * @param null | array<int<0,max>, \Gpec\GpecBundle\Type\MessageInfo> $MessageInfo
     * @return static
     */
    public function withMessageInfo(?array $MessageInfo) : static
    {
        $new = clone $this;
        $new->MessageInfo = $MessageInfo;

        return $new;
    }
}

