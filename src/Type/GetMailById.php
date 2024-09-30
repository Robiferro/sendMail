<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailById implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\GetMailByIdRequest
     */
    private \App\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest
     */
    public function __construct(\App\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest)
    {
        $this->GetMailByIdRequest = $GetMailByIdRequest;
    }

    /**
     * @return \App\GpecBundle\Type\GetMailByIdRequest
     */
    public function getGetMailByIdRequest() : \App\GpecBundle\Type\GetMailByIdRequest
    {
        return $this->GetMailByIdRequest;
    }

    /**
     * @param \App\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest
     * @return static
     */
    public function withGetMailByIdRequest(\App\GpecBundle\Type\GetMailByIdRequest $GetMailByIdRequest) : static
    {
        $new = clone $this;
        $new->GetMailByIdRequest = $GetMailByIdRequest;

        return $new;
    }
}

