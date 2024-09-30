<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailCountResponse implements ResultInterface
{
    /**
     * @var null | \App\GpecBundle\Type\GetMailCountResponse
     */
    private ?\App\GpecBundle\Type\GetMailCountResponse $GetMailCountResponse = null;

    /**
     * @var int
     */
    private int $count;

    /**
     * @return null | \App\GpecBundle\Type\GetMailCountResponse
     */
    public function getGetMailCountResponse() : ?\App\GpecBundle\Type\GetMailCountResponse
    {
        return $this->GetMailCountResponse;
    }

    /**
     * @param null | \App\GpecBundle\Type\GetMailCountResponse $GetMailCountResponse
     * @return static
     */
    public function withGetMailCountResponse(?\App\GpecBundle\Type\GetMailCountResponse $GetMailCountResponse) : static
    {
        $new = clone $this;
        $new->GetMailCountResponse = $GetMailCountResponse;

        return $new;
    }

    /**
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return static
     */
    public function withCount(int $count) : static
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}

