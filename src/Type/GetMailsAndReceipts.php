<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailsAndReceipts implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\GetMailsAndReceiptsRequest
     */
    private \App\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest
     */
    public function __construct(\App\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest)
    {
        $this->GetMailsAndReceiptsRequest = $GetMailsAndReceiptsRequest;
    }

    /**
     * @return \App\GpecBundle\Type\GetMailsAndReceiptsRequest
     */
    public function getGetMailsAndReceiptsRequest() : \App\GpecBundle\Type\GetMailsAndReceiptsRequest
    {
        return $this->GetMailsAndReceiptsRequest;
    }

    /**
     * @param \App\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest
     * @return static
     */
    public function withGetMailsAndReceiptsRequest(\App\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest) : static
    {
        $new = clone $this;
        $new->GetMailsAndReceiptsRequest = $GetMailsAndReceiptsRequest;

        return $new;
    }
}

