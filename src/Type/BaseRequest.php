<?php

namespace Gpec\GpecBundle\Type;

abstract class BaseRequest
{
    /**
     * @var null | \Gpec\GpecBundle\Type\Client
     */
    private ?\Gpec\GpecBundle\Type\Client $client = null;

    /**
     * @var null | string
     */
    private ?string $folder = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\Client
     */
    public function getClient() : ?\Gpec\GpecBundle\Type\Client
    {
        return $this->client;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\Client $client
     * @return static
     */
    public function withClient(?\Gpec\GpecBundle\Type\Client $client) : static
    {
        $new = clone $this;
        $new->client = $client;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFolder() : ?string
    {
        return $this->folder;
    }

    /**
     * @param null | string $folder
     * @return static
     */
    public function withFolder(?string $folder) : static
    {
        $new = clone $this;
        $new->folder = $folder;

        return $new;
    }
}

