<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsAndReceiptsResponse implements ResultInterface
{
    /**
     * @var null | \Gpec\GpecBundle\Type\GetMailsAndReceiptsResponse
     */
    private ?\Gpec\GpecBundle\Type\GetMailsAndReceiptsResponse $GetMailsAndReceiptsResponse = null;

    /**
     * @var null | \Gpec\GpecBundle\Type\ArrayOfMessageInfo
     */
    private ?\Gpec\GpecBundle\Type\ArrayOfMessageInfo $messages = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\GetMailsAndReceiptsResponse
     */
    public function getGetMailsAndReceiptsResponse() : ?\Gpec\GpecBundle\Type\GetMailsAndReceiptsResponse
    {
        return $this->GetMailsAndReceiptsResponse;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\GetMailsAndReceiptsResponse $GetMailsAndReceiptsResponse
     * @return static
     */
    public function withGetMailsAndReceiptsResponse(?\Gpec\GpecBundle\Type\GetMailsAndReceiptsResponse $GetMailsAndReceiptsResponse) : static
    {
        $new = clone $this;
        $new->GetMailsAndReceiptsResponse = $GetMailsAndReceiptsResponse;

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

