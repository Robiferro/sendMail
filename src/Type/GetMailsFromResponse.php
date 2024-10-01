<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsFromResponse implements ResultInterface
{
    /**
     * @var null | \Gpec\GpecBundle\Type\GetMailsFromResponse
     */
    private ?\Gpec\GpecBundle\Type\GetMailsFromResponse $GetMailsFromResponse = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\GetMailsFromResponse
     */
    public function getGetMailsFromResponse() : ?\Gpec\GpecBundle\Type\GetMailsFromResponse
    {
        return $this->GetMailsFromResponse;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\GetMailsFromResponse $GetMailsFromResponse
     * @return static
     */
    public function withGetMailsFromResponse(?\Gpec\GpecBundle\Type\GetMailsFromResponse $GetMailsFromResponse) : static
    {
        $new = clone $this;
        $new->GetMailsFromResponse = $GetMailsFromResponse;

        return $new;
    }
}

