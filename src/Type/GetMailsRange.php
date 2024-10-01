<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailsRange implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\GetMailsRangeRequest
     */
    private \Gpec\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest)
    {
        $this->GetMailsFromDateToDateRequest = $GetMailsFromDateToDateRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\GetMailsRangeRequest
     */
    public function getGetMailsFromDateToDateRequest() : \Gpec\GpecBundle\Type\GetMailsRangeRequest
    {
        return $this->GetMailsFromDateToDateRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest
     * @return static
     */
    public function withGetMailsFromDateToDateRequest(\Gpec\GpecBundle\Type\GetMailsRangeRequest $GetMailsFromDateToDateRequest) : static
    {
        $new = clone $this;
        $new->GetMailsFromDateToDateRequest = $GetMailsFromDateToDateRequest;

        return $new;
    }
}

