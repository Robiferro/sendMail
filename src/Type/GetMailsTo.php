<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailsTo implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\GetMailsToRequest
     */
    private \App\GpecBundle\Type\GetMailsToRequest $GetMailToRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\GetMailsToRequest $GetMailToRequest
     */
    public function __construct(\App\GpecBundle\Type\GetMailsToRequest $GetMailToRequest)
    {
        $this->GetMailToRequest = $GetMailToRequest;
    }

    /**
     * @return \App\GpecBundle\Type\GetMailsToRequest
     */
    public function getGetMailToRequest() : \App\GpecBundle\Type\GetMailsToRequest
    {
        return $this->GetMailToRequest;
    }

    /**
     * @param \App\GpecBundle\Type\GetMailsToRequest $GetMailToRequest
     * @return static
     */
    public function withGetMailToRequest(\App\GpecBundle\Type\GetMailsToRequest $GetMailToRequest) : static
    {
        $new = clone $this;
        $new->GetMailToRequest = $GetMailToRequest;

        return $new;
    }
}

