<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendMail implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\SendMailRequest
     */
    private \Gpec\GpecBundle\Type\SendMailRequest $SendMailRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\SendMailRequest $SendMailRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\SendMailRequest $SendMailRequest)
    {
        $this->SendMailRequest = $SendMailRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\SendMailRequest
     */
    public function getSendMailRequest() : \Gpec\GpecBundle\Type\SendMailRequest
    {
        return $this->SendMailRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\SendMailRequest $SendMailRequest
     * @return static
     */
    public function withSendMailRequest(\Gpec\GpecBundle\Type\SendMailRequest $SendMailRequest) : static
    {
        $new = clone $this;
        $new->SendMailRequest = $SendMailRequest;

        return $new;
    }
}

