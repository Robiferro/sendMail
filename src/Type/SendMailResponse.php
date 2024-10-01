<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendMailResponse implements ResultInterface
{
    /**
     * @var null | \Gpec\GpecBundle\Type\SendMailResponse
     */
    private ?\Gpec\GpecBundle\Type\SendMailResponse $SendMailResponse = null;

    /**
     * @var null | string
     */
    private ?string $id = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\SendMailResponse
     */
    public function getSendMailResponse() : ?\Gpec\GpecBundle\Type\SendMailResponse
    {
        return $this->SendMailResponse;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\SendMailResponse $SendMailResponse
     * @return static
     */
    public function withSendMailResponse(?\Gpec\GpecBundle\Type\SendMailResponse $SendMailResponse) : static
    {
        $new = clone $this;
        $new->SendMailResponse = $SendMailResponse;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @param null | string $id
     * @return static
     */
    public function withId(?string $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }
}

