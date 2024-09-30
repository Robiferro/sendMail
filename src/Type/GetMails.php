<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMails implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\GetMailsRequest
     */
    private \App\GpecBundle\Type\GetMailsRequest $GetMailsRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\GetMailsRequest $GetMailsRequest
     */
    public function __construct(\App\GpecBundle\Type\GetMailsRequest $GetMailsRequest)
    {
        $this->GetMailsRequest = $GetMailsRequest;
    }

    /**
     * @return \App\GpecBundle\Type\GetMailsRequest
     */
    public function getGetMailsRequest() : \App\GpecBundle\Type\GetMailsRequest
    {
        return $this->GetMailsRequest;
    }

    /**
     * @param \App\GpecBundle\Type\GetMailsRequest $GetMailsRequest
     * @return static
     */
    public function withGetMailsRequest(\App\GpecBundle\Type\GetMailsRequest $GetMailsRequest) : static
    {
        $new = clone $this;
        $new->GetMailsRequest = $GetMailsRequest;

        return $new;
    }
}

