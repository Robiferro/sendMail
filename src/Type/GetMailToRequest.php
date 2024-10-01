<?php

namespace Gpec\GpecBundle\Type;

use \Gpec\GpecBundle\Type\GetMailsRequest;

class GetMailToRequest extends GetMailsRequest
{
    /**
     * @var null | string
     */
    private ?string $to = null;

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
}

