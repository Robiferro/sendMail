<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailsFrom implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\GetMailsFromRequest
     */
    private \App\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest
     */
    public function __construct(\App\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest)
    {
        $this->GetMailsFromRequest = $GetMailsFromRequest;
    }

    /**
     * @return \App\GpecBundle\Type\GetMailsFromRequest
     */
    public function getGetMailsFromRequest() : \App\GpecBundle\Type\GetMailsFromRequest
    {
        return $this->GetMailsFromRequest;
    }

    /**
     * @param \App\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest
     * @return static
     */
    public function withGetMailsFromRequest(\App\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest) : static
    {
        $new = clone $this;
        $new->GetMailsFromRequest = $GetMailsFromRequest;

        return $new;
    }
}

