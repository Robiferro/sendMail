<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsAndReceiptsResponse implements ResultInterface
{
    /**
     * @var null | \App\GpecBundle\Type\GetMailsAndReceiptsResponse
     */
    private ?\App\GpecBundle\Type\GetMailsAndReceiptsResponse $GetMailsAndReceiptsResponse = null;

    /**
     * @var null | \App\GpecBundle\Type\ArrayOfMessageInfo
     */
    private ?\App\GpecBundle\Type\ArrayOfMessageInfo $messages = null;

    /**
     * @return null | \App\GpecBundle\Type\GetMailsAndReceiptsResponse
     */
    public function getGetMailsAndReceiptsResponse() : ?\App\GpecBundle\Type\GetMailsAndReceiptsResponse
    {
        return $this->GetMailsAndReceiptsResponse;
    }

    /**
     * @param null | \App\GpecBundle\Type\GetMailsAndReceiptsResponse $GetMailsAndReceiptsResponse
     * @return static
     */
    public function withGetMailsAndReceiptsResponse(?\App\GpecBundle\Type\GetMailsAndReceiptsResponse $GetMailsAndReceiptsResponse) : static
    {
        $new = clone $this;
        $new->GetMailsAndReceiptsResponse = $GetMailsAndReceiptsResponse;

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

