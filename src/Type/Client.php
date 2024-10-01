<?php

namespace Gpec\GpecBundle\Type;

class Client
{
    /**
     * @var null | string
     */
    private ?string $user = null;

    /**
     * @var null | string
     */
    private ?string $password = null;

    /**
     * @return null | string
     */
    public function getUser() : ?string
    {
        return $this->user;
    }

    /**
     * @param null | string $user
     * @return static
     */
    public function withUser(?string $user) : static
    {
        $new = clone $this;
        $new->user = $user;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }

    /**
     * @param null | string $password
     * @return static
     */
    public function withPassword(?string $password) : static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }
}

