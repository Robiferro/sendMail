<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsToResponse implements ResultInterface
{
    /**
     * @var null | \App\GpecBundle\Type\GetMailsToResponse
     */
    private ?\App\GpecBundle\Type\GetMailsToResponse $GetMailsToResponse = null;

    /**
     * @return null | \App\GpecBundle\Type\GetMailsToResponse
     */
    public function getGetMailsToResponse() : ?\App\GpecBundle\Type\GetMailsToResponse
    {
        return $this->GetMailsToResponse;
    }

    /**
     * @param null | \App\GpecBundle\Type\GetMailsToResponse $GetMailsToResponse
     * @return static
     */
    public function withGetMailsToResponse(?\App\GpecBundle\Type\GetMailsToResponse $GetMailsToResponse) : static
    {
        $new = clone $this;
        $new->GetMailsToResponse = $GetMailsToResponse;

        return $new;
    }
}

