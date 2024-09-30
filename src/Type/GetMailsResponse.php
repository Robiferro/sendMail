<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsResponse implements ResultInterface
{
    /**
     * @var null | \App\GpecBundle\Type\GetMailsResponse
     */
    private ?\App\GpecBundle\Type\GetMailsResponse $GetMailsResponse = null;

    /**
     * @var null | \App\GpecBundle\Type\ArrayOfMessageInfo
     */
    private ?\App\GpecBundle\Type\ArrayOfMessageInfo $messages = null;

    /**
     * @return null | \App\GpecBundle\Type\GetMailsResponse
     */
    public function getGetMailsResponse() : ?\App\GpecBundle\Type\GetMailsResponse
    {
        return $this->GetMailsResponse;
    }

    /**
     * @param null | \App\GpecBundle\Type\GetMailsResponse $GetMailsResponse
     * @return static
     */
    public function withGetMailsResponse(?\App\GpecBundle\Type\GetMailsResponse $GetMailsResponse) : static
    {
        $new = clone $this;
        $new->GetMailsResponse = $GetMailsResponse;

        return $new;
    }

    /**
     * @return null | \App\GpecBundle\Type\ArrayOfMessageInfo
     */
    public function getMessages() : ?\App\GpecBundle\Type\ArrayOfMessageInfo
    {
        return $this->messages;
    }

    /**
     * @param null | \App\GpecBundle\Type\ArrayOfMessageInfo $messages
     * @return static
     */
    public function withMessages(?\App\GpecBundle\Type\ArrayOfMessageInfo $messages) : static
    {
        $new = clone $this;
        $new->messages = $messages;

        return $new;
    }
}

