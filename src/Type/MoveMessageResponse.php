<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MoveMessageResponse implements ResultInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\MoveMessageResponse
     */
    private \Gpec\GpecBundle\Type\MoveMessageResponse $MoveMessageResponse;

    /**
     * @return \Gpec\GpecBundle\Type\MoveMessageResponse
     */
    public function getMoveMessageResponse() : \Gpec\GpecBundle\Type\MoveMessageResponse
    {
        return $this->MoveMessageResponse;
    }

    /**
     * @param \Gpec\GpecBundle\Type\MoveMessageResponse $MoveMessageResponse
     * @return static
     */
    public function withMoveMessageResponse(\Gpec\GpecBundle\Type\MoveMessageResponse $MoveMessageResponse) : static
    {
        $new = clone $this;
        $new->MoveMessageResponse = $MoveMessageResponse;

        return $new;
    }
}

