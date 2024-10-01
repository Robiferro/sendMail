<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailsFrom implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\GetMailsFromRequest
     */
    private \Gpec\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest)
    {
        $this->GetMailsFromRequest = $GetMailsFromRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\GetMailsFromRequest
     */
    public function getGetMailsFromRequest() : \Gpec\GpecBundle\Type\GetMailsFromRequest
    {
        return $this->GetMailsFromRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest
     * @return static
     */
    public function withGetMailsFromRequest(\Gpec\GpecBundle\Type\GetMailsFromRequest $GetMailsFromRequest) : static
    {
        $new = clone $this;
        $new->GetMailsFromRequest = $GetMailsFromRequest;

        return $new;
    }
}

