<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailById implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\GetMailByIdRequest
     */
    private \Gpec\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest)
    {
        $this->GetMailByIdRequest = $GetMailByIdRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\GetMailByIdRequest
     */
    public function getGetMailByIdRequest() : \Gpec\GpecBundle\Type\GetMailByIdRequest
    {
        return $this->GetMailByIdRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest
     * @return static
     */
    public function withGetMailByIdRequest(\Gpec\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest) : static
    {
        $new = clone $this;
        $new->GetMailByIdRequest = $GetMailByIdRequest;

        return $new;
    }
}

