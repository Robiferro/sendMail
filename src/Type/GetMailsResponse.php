<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsResponse implements ResultInterface
{
    /**
     * @var null | \Gpec\GpecBundle\Type\GetMailsResponse
     */
    private ?\Gpec\GpecBundle\Type\GetMailsResponse $GetMailsResponse = null;

    /**
     * @var null | \Gpec\GpecBundle\Type\ArrayOfMessageInfo
     */
    private ?\Gpec\GpecBundle\Type\ArrayOfMessageInfo $messages = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\GetMailsResponse
     */
    public function getGetMailsResponse() : ?\Gpec\GpecBundle\Type\GetMailsResponse
    {
        return $this->GetMailsResponse;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\GetMailsResponse $GetMailsResponse
     * @return static
     */
    public function withGetMailsResponse(?\Gpec\GpecBundle\Type\GetMailsResponse $GetMailsResponse) : static
    {
        $new = clone $this;
        $new->GetMailsResponse = $GetMailsResponse;

        return $new;
    }

    /**
     * @return null | \Gpec\GpecBundle\Type\ArrayOfMessageInfo
     */
    public function getMessages() : ?\Gpec\GpecBundle\Type\ArrayOfMessageInfo
    {
        return $this->messages;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\ArrayOfMessageInfo $messages
     * @return static
     */
    public function withMessages(?\Gpec\GpecBundle\Type\ArrayOfMessageInfo $messages) : static
    {
        $new = clone $this;
        $new->messages = $messages;

        return $new;
    }
}

