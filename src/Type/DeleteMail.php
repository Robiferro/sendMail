<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteMail implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\DeleteMailRequest
     */
    private \Gpec\GpecBundle\Type\DeleteMailRequest $deleteMailRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\DeleteMailRequest $deleteMailRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\DeleteMailRequest $deleteMailRequest)
    {
        $this->deleteMailRequest = $deleteMailRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\DeleteMailRequest
     */
    public function getDeleteMailRequest() : \Gpec\GpecBundle\Type\DeleteMailRequest
    {
        return $this->deleteMailRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\DeleteMailRequest $deleteMailRequest
     * @return static
     */
    public function withDeleteMailRequest(\Gpec\GpecBundle\Type\DeleteMailRequest $deleteMailRequest) : static
    {
        $new = clone $this;
        $new->deleteMailRequest = $deleteMailRequest;

        return $new;
    }
}

