<?php

namespace Gpec\GpecBundle\Type;

use \Gpec\GpecBundle\Type\BaseRequest;

class MoveMessageRequest extends BaseRequest
{
    /**
     * @var null | string
     */
    private ?string $MessageId = null;

    /**
     * @var null | string
     */
    private ?string $DestinationFolder = null;

    /**
     * @return null | string
     */
    public function getMessageId() : ?string
    {
        return $this->MessageId;
    }

    /**
     * @param null | string $MessageId
     * @return static
     */
    public function withMessageId(?string $MessageId) : static
    {
        $new = clone $this;
        $new->MessageId = $MessageId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDestinationFolder() : ?string
    {
        return $this->DestinationFolder;
    }

    /**
     * @param null | string $DestinationFolder
     * @return static
     */
    public function withDestinationFolder(?string $DestinationFolder) : static
    {
        $new = clone $this;
        $new->DestinationFolder = $DestinationFolder;

        return $new;
    }
}

