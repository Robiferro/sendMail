<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsToResponse implements ResultInterface
{
    /**
     * @var null | \Gpec\GpecBundle\Type\GetMailsToResponse
     */
    private ?\Gpec\GpecBundle\Type\GetMailsToResponse $GetMailsToResponse = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\GetMailsToResponse
     */
    public function getGetMailsToResponse() : ?\Gpec\GpecBundle\Type\GetMailsToResponse
    {
        return $this->GetMailsToResponse;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\GetMailsToResponse $GetMailsToResponse
     * @return static
     */
    public function withGetMailsToResponse(?\Gpec\GpecBundle\Type\GetMailsToResponse $GetMailsToResponse) : static
    {
        $new = clone $this;
        $new->GetMailsToResponse = $GetMailsToResponse;

        return $new;
    }
}

