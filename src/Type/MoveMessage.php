<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MoveMessage implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\MoveMessageRequest
     */
    private \App\GpecBundle\Type\MoveMessageRequest $moveMessageRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\MoveMessageRequest $moveMessageRequest
     */
    public function __construct(\App\GpecBundle\Type\MoveMessageRequest $moveMessageRequest)
    {
        $this->moveMessageRequest = $moveMessageRequest;
    }

    /**
     * @return \App\GpecBundle\Type\MoveMessageRequest
     */
    public function getMoveMessageRequest() : \App\GpecBundle\Type\MoveMessageRequest
    {
        return $this->moveMessageRequest;
    }

    /**
     * @param \App\GpecBundle\Type\MoveMessageRequest $moveMessageRequest
     * @return static
     */
    public function withMoveMessageRequest(\App\GpecBundle\Type\MoveMessageRequest $moveMessageRequest) : static
    {
        $new = clone $this;
        $new->moveMessageRequest = $moveMessageRequest;

        return $new;
    }
}

