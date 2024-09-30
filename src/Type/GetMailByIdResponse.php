<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailByIdResponse implements ResultInterface
{
    /**
     * @var null | \App\GpecBundle\Type\GetMailByIdResponse
     */
    private ?\App\GpecBundle\Type\GetMailByIdResponse $GetMailByIdResponse = null;

    /**
     * @var null | \App\GpecBundle\Type\MessageInfo
     */
    private ?\App\GpecBundle\Type\MessageInfo $message = null;

    /**
     * @return null | \App\GpecBundle\Type\GetMailByIdResponse
     */
    public function getGetMailByIdResponse() : ?\App\GpecBundle\Type\GetMailByIdResponse
    {
        return $this->GetMailByIdResponse;
    }

    /**
     * @param null | \App\GpecBundle\Type\GetMailByIdResponse $GetMailByIdResponse
     * @return static
     */
    public function withGetMailByIdResponse(?\App\GpecBundle\Type\GetMailByIdResponse $GetMailByIdResponse) : static
    {
        $new = clone $this;
        $new->GetMailByIdResponse = $GetMailByIdResponse;

        return $new;
    }

    /**
     * @return null | \App\GpecBundle\Type\MessageInfo
     */
    public function getMessage() : ?\App\GpecBundle\Type\MessageInfo
    {
        return $this->message;
    }

    /**
     * @param null | \App\GpecBundle\Type\MessageInfo $message
     * @return static
     */
    public function withMessage(?\App\GpecBundle\Type\MessageInfo $message) : static
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }
}

