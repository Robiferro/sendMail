<?php

namespace App\GpecBundle\Type;

use \App\GpecBundle\Type\BaseRequest;

class SendMailRequest extends BaseRequest
{
    /**
     * @var null | \App\GpecBundle\Type\MessageInfoSender
     */
    private ?\App\GpecBundle\Type\MessageInfoSender $message = null;

    /**
     * @return null | \App\GpecBundle\Type\MessageInfoSender
     */
    public function getMessage() : ?\App\GpecBundle\Type\MessageInfoSender
    {
        return $this->message;
    }

    /**
     * @param null | \App\GpecBundle\Type\MessageInfoSender $message
     * @return static
     */
    public function withMessage(?\App\GpecBundle\Type\MessageInfoSender $message) : static
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }
}

