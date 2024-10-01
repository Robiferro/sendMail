<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailByIdResponse implements ResultInterface
{
    /**
     * @var null | \Gpec\GpecBundle\Type\GetMailByIdResponse
     */
    private ?\Gpec\GpecBundle\Type\GetMailByIdResponse $GetMailByIdResponse = null;

    /**
     * @var null | \Gpec\GpecBundle\Type\MessageInfo
     */
    private ?\Gpec\GpecBundle\Type\MessageInfo $message = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\GetMailByIdResponse
     */
    public function getGetMailByIdResponse() : ?\Gpec\GpecBundle\Type\GetMailByIdResponse
    {
        return $this->GetMailByIdResponse;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\GetMailByIdResponse $GetMailByIdResponse
     * @return static
     */
    public function withGetMailByIdResponse(?\Gpec\GpecBundle\Type\GetMailByIdResponse $GetMailByIdResponse) : static
    {
        $new = clone $this;
        $new->GetMailByIdResponse = $GetMailByIdResponse;

        return $new;
    }

    /**
     * @return null | \Gpec\GpecBundle\Type\MessageInfo
     */
    public function getMessage() : ?\Gpec\GpecBundle\Type\MessageInfo
    {
        return $this->message;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\MessageInfo $message
     * @return static
     */
    public function withMessage(?\Gpec\GpecBundle\Type\MessageInfo $message) : static
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }
}

