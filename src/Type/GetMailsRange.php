<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailsRange implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\GetMailsRangeRequest
     */
    private \App\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest
     */
    public function __construct(\App\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest)
    {
        $this->GetMailsFromDateToDateRequest = $GetMailsFromDateToDateRequest;
    }

    /**
     * @return \App\GpecBundle\Type\GetMailsRangeRequest
     */
    public function getGetMailsFromDateToDateRequest() : \App\GpecBundle\Type\GetMailsRangeRequest
    {
        return $this->GetMailsFromDateToDateRequest;
    }

    /**
     * @param \App\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest
     * @return static
     */
    public function withGetMailsFromDateToDateRequest(\App\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest) : static
    {
        $new = clone $this;
        $new->GetMailsFromDateToDateRequest = $GetMailsFromDateToDateRequest;

        return $new;
    }
}

