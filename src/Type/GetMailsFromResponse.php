<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsFromResponse implements ResultInterface
{
    /**
     * @var null | \App\GpecBundle\Type\GetMailsFromResponse
     */
    private ?\App\GpecBundle\Type\GetMailsFromResponse $GetMailsFromResponse = null;

    /**
     * @return null | \App\GpecBundle\Type\GetMailsFromResponse
     */
    public function getGetMailsFromResponse() : ?\App\GpecBundle\Type\GetMailsFromResponse
    {
        return $this->GetMailsFromResponse;
    }

    /**
     * @param null | \App\GpecBundle\Type\GetMailsFromResponse $GetMailsFromResponse
     * @return static
     */
    public function withGetMailsFromResponse(?\App\GpecBundle\Type\GetMailsFromResponse $GetMailsFromResponse) : static
    {
        $new = clone $this;
        $new->GetMailsFromResponse = $GetMailsFromResponse;

        return $new;
    }
}

