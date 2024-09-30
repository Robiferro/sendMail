<?php

namespace App\GpecBundle\Type;

use \App\GpecBundle\Type\GetMailsRequest;

class GetMailsFromRequest extends GetMailsRequest
{
    /**
     * @var null | string
     */
    private ?string $from = null;

    /**
     * @return null | string
     */
    public function getFrom() : ?string
    {
        return $this->from;
    }

    /**
     * @param null | string $from
     * @return static
     */
    public function withFrom(?string $from) : static
    {
        $new = clone $this;
        $new->from = $from;

        return $new;
    }
}

