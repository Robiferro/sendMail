<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailCount implements RequestInterface
{
    /**
     * @var \App\GpecBundle\Type\GetMailCountRequest
     */
    private \App\GpecBundle\Type\GetMailCountRequest $getMailCountRequest;

    /**
     * Constructor
     *
     * @param \App\GpecBundle\Type\GetMailCountRequest $getMailCountRequest
     */
    public function __construct(\App\GpecBundle\Type\GetMailCountRequest $getMailCountRequest)
    {
        $this->getMailCountRequest = $getMailCountRequest;
    }

    /**
     * @return \App\GpecBundle\Type\GetMailCountRequest
     */
    public function getGetMailCountRequest() : \App\GpecBundle\Type\GetMailCountRequest
    {
        return $this->getMailCountRequest;
    }

    /**
     * @param \App\GpecBundle\Type\GetMailCountRequest $getMailCountRequest
     * @return static
     */
    public function withGetMailCountRequest(\App\GpecBundle\Type\GetMailCountRequest $getMailCountRequest) : static
    {
        $new = clone $this;
        $new->getMailCountRequest = $getMailCountRequest;

        return $new;
    }
}

