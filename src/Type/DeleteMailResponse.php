<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteMailResponse implements ResultInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\DeleteMailResponse
     */
    private \Gpec\GpecBundle\Type\DeleteMailResponse $DeleteMailResponse;

    /**
     * @return \Gpec\GpecBundle\Type\DeleteMailResponse
     */
    public function getDeleteMailResponse() : \Gpec\GpecBundle\Type\DeleteMailResponse
    {
        return $this->DeleteMailResponse;
    }

    /**
     * @param \Gpec\GpecBundle\Type\DeleteMailResponse $DeleteMailResponse
     * @return static
     */
    public function withDeleteMailResponse(\Gpec\GpecBundle\Type\DeleteMailResponse $DeleteMailResponse) : static
    {
        $new = clone $this;
        $new->DeleteMailResponse = $DeleteMailResponse;

        return $new;
    }
}

