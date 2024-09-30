<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteMail implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\DeleteMailRequest
     */
    private \App\GpecBundle\Type\DeleteMailRequest $deleteMailRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\DeleteMailRequest $deleteMailRequest
     */
    public function __construct(\App\GpecBundle\Type\DeleteMailRequest $deleteMailRequest)
    {
        $this->deleteMailRequest = $deleteMailRequest;
    }

    /**
     * @return \App\GpecBundle\Type\DeleteMailRequest
     */
    public function getDeleteMailRequest() : \App\GpecBundle\Type\DeleteMailRequest
    {
        return $this->deleteMailRequest;
    }

    /**
     * @param \App\GpecBundle\Type\DeleteMailRequest $deleteMailRequest
     * @return static
     */
    public function withDeleteMailRequest(\App\GpecBundle\Type\DeleteMailRequest $deleteMailRequest) : static
    {
        $new = clone $this;
        $new->deleteMailRequest = $deleteMailRequest;

        return $new;
    }
}

