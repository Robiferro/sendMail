<?php

namespace Gpec\GpecBundle\Type;

use \Gpec\GpecBundle\Type\BaseRequest;

class SendMailRequest extends BaseRequest
{
    /**
     * @var null | \Gpec\GpecBundle\Type\MessageInfoSender
     */
    private ?\Gpec\GpecBundle\Type\MessageInfoSender $message = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\MessageInfoSender
     */
    public function getMessage() : ?\Gpec\GpecBundle\Type\MessageInfoSender
    {
        return $this->message;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\MessageInfoSender $message
     * @return static
     */
    public function withMessage(?\Gpec\GpecBundle\Type\MessageInfoSender $message) : static
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }
}

