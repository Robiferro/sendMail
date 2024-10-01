<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailCountResponse implements ResultInterface
{
    /**
     * @var null | \Gpec\GpecBundle\Type\GetMailCountResponse
     */
    private ?\Gpec\GpecBundle\Type\GetMailCountResponse $GetMailCountResponse = null;

    /**
     * @var int
     */
    private int $count;

    /**
     * @return null | \Gpec\GpecBundle\Type\GetMailCountResponse
     */
    public function getGetMailCountResponse() : ?\Gpec\GpecBundle\Type\GetMailCountResponse
    {
        return $this->GetMailCountResponse;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\GetMailCountResponse $GetMailCountResponse
     * @return static
     */
    public function withGetMailCountResponse(?\Gpec\GpecBundle\Type\GetMailCountResponse $GetMailCountResponse) : static
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

