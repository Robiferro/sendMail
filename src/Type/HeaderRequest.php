<?php

namespace Gpec\GpecBundle\Type;

class HeaderRequest
{
    /**
     * @var null | string
     */
    private ?string $applicationId = null;

    /**
     * @var null | string
     */
    private ?string $trackingId = null;

    /**
     * @var null | string
     */
    private ?string $userId = null;

    /**
     * @return null | string
     */
    public function getApplicationId() : ?string
    {
        return $this->applicationId;
    }

    /**
     * @param null | string $applicationId
     * @return static
     */
    public function withApplicationId(?string $applicationId) : static
    {
        $new = clone $this;
        $new->applicationId = $applicationId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTrackingId() : ?string
    {
        return $this->trackingId;
    }

    /**
     * @param null | string $trackingId
     * @return static
     */
    public function withTrackingId(?string $trackingId) : static
    {
        $new = clone $this;
        $new->trackingId = $trackingId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }

    /**
     * @param null | string $userId
     * @return static
     */
    public function withUserId(?string $userId) : static
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }
}

