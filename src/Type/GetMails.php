<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMails implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\GetMailsRequest
     */
    private \Gpec\GpecBundle\Type\GetMailsRequest $GetMailsRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\GetMailsRequest $GetMailsRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\GetMailsRequest $GetMailsRequest)
    {
        $this->GetMailsRequest = $GetMailsRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\GetMailsRequest
     */
    public function getGetMailsRequest() : \Gpec\GpecBundle\Type\GetMailsRequest
    {
        return $this->GetMailsRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\GetMailsRequest $GetMailsRequest
     * @return static
     */
    public function withGetMailsRequest(\Gpec\GpecBundle\Type\GetMailsRequest $GetMailsRequest) : static
    {
        $new = clone $this;
        $new->GetMailsRequest = $GetMailsRequest;

        return $new;
    }
}

