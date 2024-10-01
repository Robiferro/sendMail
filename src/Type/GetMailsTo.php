<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailsTo implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\GetMailsToRequest
     */
    private \Gpec\GpecBundle\Type\GetMailsToRequest $GetMailToRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\GetMailsToRequest $GetMailToRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\GetMailsToRequest $GetMailToRequest)
    {
        $this->GetMailToRequest = $GetMailToRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\GetMailsToRequest
     */
    public function getGetMailToRequest() : \Gpec\GpecBundle\Type\GetMailsToRequest
    {
        return $this->GetMailToRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\GetMailsToRequest $GetMailToRequest
     * @return static
     */
    public function withGetMailToRequest(\Gpec\GpecBundle\Type\GetMailsToRequest $GetMailToRequest) : static
    {
        $new = clone $this;
        $new->GetMailToRequest = $GetMailToRequest;

        return $new;
    }
}

