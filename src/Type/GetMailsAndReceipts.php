<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailsAndReceipts implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\GetMailsAndReceiptsRequest
     */
    private \Gpec\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest)
    {
        $this->GetMailsAndReceiptsRequest = $GetMailsAndReceiptsRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\GetMailsAndReceiptsRequest
     */
    public function getGetMailsAndReceiptsRequest() : \Gpec\GpecBundle\Type\GetMailsAndReceiptsRequest
    {
        return $this->GetMailsAndReceiptsRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest
     * @return static
     */
    public function withGetMailsAndReceiptsRequest(\Gpec\GpecBundle\Type\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest) : static
    {
        $new = clone $this;
        $new->GetMailsAndReceiptsRequest = $GetMailsAndReceiptsRequest;

        return $new;
    }
}

