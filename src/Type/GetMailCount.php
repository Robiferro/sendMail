<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMailCount implements RequestInterface
{
    /**
     * @var \Gpec\GpecBundle\Type\GetMailCountRequest
     */
    private \Gpec\GpecBundle\Type\GetMailCountRequest $getMailCountRequest;

    /**
     * Constructor
     *
     * @param \Gpec\GpecBundle\Type\GetMailCountRequest $getMailCountRequest
     */
    public function __construct(\Gpec\GpecBundle\Type\GetMailCountRequest $getMailCountRequest)
    {
        $this->getMailCountRequest = $getMailCountRequest;
    }

    /**
     * @return \Gpec\GpecBundle\Type\GetMailCountRequest
     */
    public function getGetMailCountRequest() : \Gpec\GpecBundle\Type\GetMailCountRequest
    {
        return $this->getMailCountRequest;
    }

    /**
     * @param \Gpec\GpecBundle\Type\GetMailCountRequest $getMailCountRequest
     * @return static
     */
    public function withGetMailCountRequest(\Gpec\GpecBundle\Type\GetMailCountRequest $getMailCountRequest) : static
    {
        $new = clone $this;
        $new->getMailCountRequest = $getMailCountRequest;

        return $new;
    }
}

