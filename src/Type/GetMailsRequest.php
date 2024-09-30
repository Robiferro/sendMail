<?php

namespace App\GpecBundle\Type;

use \App\GpecBundle\Type\GetMailRequest;

class GetMailsRequest extends GetMailRequest
{
    /**
     * @var int
     */
    private int $limit;

    /**
     * @var int
     */
    private int $offset;

    /**
     * @var bool
     */
    private bool $unseenStatus;

    /**
     * @var 'onlyHeaders' | 'allMessage' | 'uId'
     */
    private string $outType;

    /**
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return static
     */
    public function withLimit(int $limit) : static
    {
        $new = clone $this;
        $new->limit = $limit;

        return $new;
    }

    /**
     * @return int
     */
    public function getOffset() : int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return static
     */
    public function withOffset(int $offset) : static
    {
        $new = clone $this;
        $new->offset = $offset;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUnseenStatus() : bool
    {
        return $this->unseenStatus;
    }

    /**
     * @param bool $unseenStatus
     * @return static
     */
    public function withUnseenStatus(bool $unseenStatus) : static
    {
        $new = clone $this;
        $new->unseenStatus = $unseenStatus;

        return $new;
    }

    /**
     * @return 'onlyHeaders' | 'allMessage' | 'uId'
     */
    public function getOutType() : string
    {
        return $this->outType;
    }

    /**
     * @param 'onlyHeaders' | 'allMessage' | 'uId' $outType
     * @return static
     */
    public function withOutType(string $outType) : static
    {
        $new = clone $this;
        $new->outType = $outType;

        return $new;
    }
}

