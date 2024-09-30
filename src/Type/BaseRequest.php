<?php

namespace App\GpecBundle\Type;

abstract class BaseRequest
{
    /**
     * @var null | \App\GpecBundle\Type\Client
     */
    private ?\App\GpecBundle\Type\Client $client = null;

    /**
     * @var null | string
     */
    private ?string $folder = null;

    /**
     * @return null | \App\GpecBundle\Type\Client
     */
    public function getClient() : ?\App\GpecBundle\Type\Client
    {
        return $this->client;
    }

    /**
     * @param null | \App\GpecBundle\Type\Client $client
     * @return static
     */
    public function withClient(?\App\GpecBundle\Type\Client $client) : static
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

