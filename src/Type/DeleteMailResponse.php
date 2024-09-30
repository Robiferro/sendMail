<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteMailResponse implements ResultInterface
{
    /**
     * @var \App\GpecBundle\Type\DeleteMailResponse
     */
    private \App\GpecBundle\Type\DeleteMailResponse $DeleteMailResponse;

    /**
     * @return \App\GpecBundle\Type\DeleteMailResponse
     */
    public function getDeleteMailResponse() : \App\GpecBundle\Type\DeleteMailResponse
    {
        return $this->DeleteMailResponse;
    }

    /**
     * @param \App\GpecBundle\Type\DeleteMailResponse $DeleteMailResponse
     * @return static
     */
    public function withDeleteMailResponse(\App\GpecBundle\Type\DeleteMailResponse $DeleteMailResponse) : static
    {
        $new = clone $this;
        $new->DeleteMailResponse = $DeleteMailResponse;

        return $new;
    }
}

