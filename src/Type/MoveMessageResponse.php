<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MoveMessageResponse implements ResultInterface
{
    /**
     * @var \App\GpecBundle\Type\MoveMessageResponse
     */
    private \App\GpecBundle\Type\MoveMessageResponse $MoveMessageResponse;

    /**
     * @return \App\GpecBundle\Type\MoveMessageResponse
     */
    public function getMoveMessageResponse() : \App\GpecBundle\Type\MoveMessageResponse
    {
        return $this->MoveMessageResponse;
    }

    /**
     * @param \App\GpecBundle\Type\MoveMessageResponse $MoveMessageResponse
     * @return static
     */
    public function withMoveMessageResponse(\App\GpecBundle\Type\MoveMessageResponse $MoveMessageResponse) : static
    {
        $new = clone $this;
        $new->MoveMessageResponse = $MoveMessageResponse;

        return $new;
    }
}

