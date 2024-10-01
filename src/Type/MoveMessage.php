<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MoveMessage implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\MoveMessageRequest
     */
    private \Gpec\GpecBundle\Type\MoveMessageRequest $moveMessageRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\MoveMessageRequest $moveMessageRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\MoveMessageRequest $moveMessageRequest)
    {
        $this->moveMessageRequest = $moveMessageRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\MoveMessageRequest
     */
    public function getMoveMessageRequest() : \Gpec\GpecBundle\Type\MoveMessageRequest
    {
        return $this->moveMessageRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\MoveMessageRequest $moveMessageRequest
     * @return static
     */
    public function withMoveMessageRequest(\Gpec\GpecBundle\Type\MoveMessageRequest $moveMessageRequest) : static
    {
        $new = clone $this;
        $new->moveMessageRequest = $moveMessageRequest;

        return $new;
    }
}

