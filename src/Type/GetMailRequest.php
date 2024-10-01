<?php

namespace Gpec\GpecBundle\Type;

use \Gpec\GpecBundle\Type\BaseRequest;

class GetMailRequest extends BaseRequest
{
    /**
     * @var bool
     */
    private bool $keepActualSeenStatus;

    /**
     * @var 'message' | 'acceptance' | 'delivery' | 'all'
     */
    private string $messageType;

    /**
     * @return bool
     */
    public function getKeepActualSeenStatus() : bool
    {
        return $this->keepActualSeenStatus;
    }

    /**
     * @param bool $keepActualSeenStatus
     * @return static
     */
    public function withKeepActualSeenStatus(bool $keepActualSeenStatus) : static
    {
        $new = clone $this;
        $new->keepActualSeenStatus = $keepActualSeenStatus;

        return $new;
    }

    /**
     * @return 'message' | 'acceptance' | 'delivery' | 'all'
     */
    public function getMessageType() : string
    {
        return $this->messageType;
    }

    /**
     * @param 'message' | 'acceptance' | 'delivery' | 'all' $messageType
     * @return static
     */
    public function withMessageType(string $messageType) : static
    {
        $new = clone $this;
        $new->messageType = $messageType;

        return $new;
    }
}

