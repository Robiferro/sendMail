<?php

namespace App\GpecBundle\Type;

class ArrayOfObjectHeaders
{
    /**
     * @var null | array<int<0,max>, \App\GpecBundle\Type\ObjectHeaders>
     */
    private ?array $ObjectHeaders = null;

    /**
     * @return null | array<int<0,max>, \App\GpecBundle\Type\ObjectHeaders>
     */
    public function getObjectHeaders() : ?array
    {
        return $this->ObjectHeaders;
    }

    /**
     * @param null | array<int<0,max>, \App\GpecBundle\Type\ObjectHeaders> $ObjectHeaders
     * @return static
     */
    public function withObjectHeaders(?array $ObjectHeaders) : static
    {
        $new = clone $this;
        $new->ObjectHeaders = $ObjectHeaders;

        return $new;
    }
}

