<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendMail implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\SendMailRequest
     */
    private \App\GpecBundle\Type\SendMailRequest $SendMailRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\SendMailRequest $SendMailRequest
     */
    public function __construct(\App\GpecBundle\Type\SendMailRequest $SendMailRequest)
    {
        $this->SendMailRequest = $SendMailRequest;
    }

    /**
     * @return \App\GpecBundle\Type\SendMailRequest
     */
    public function getSendMailRequest() : \App\GpecBundle\Type\SendMailRequest
    {
        return $this->SendMailRequest;
    }

    /**
     * @param \App\GpecBundle\Type\SendMailRequest $SendMailRequest
     * @return static
     */
    public function withSendMailRequest(\App\GpecBundle\Type\SendMailRequest $SendMailRequest) : static
    {
        $new = clone $this;
        $new->SendMailRequest = $SendMailRequest;

        return $new;
    }
}

