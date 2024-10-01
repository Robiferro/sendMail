<?php

namespace Gpec\GpecBundle\Type;

use \Gpec\GpecBundle\Type\GetMailsRequest;

class GetMailsRangeRequest extends GetMailsRequest
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $fromDate;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $toDate;

    /**
     * @return \DateTimeInterface
     */
    public function getFromDate() : \DateTimeInterface
    {
        return $this->fromDate;
    }

    /**
     * @param \DateTimeInterface $fromDate
     * @return static
     */
    public function withFromDate(\DateTimeInterface $fromDate) : static
    {
        $new = clone $this;
        $new->fromDate = $fromDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getToDate() : \DateTimeInterface
    {
        return $this->toDate;
    }

    /**
     * @param \DateTimeInterface $toDate
     * @return static
     */
    public function withToDate(\DateTimeInterface $toDate) : static
    {
        $new = clone $this;
        $new->toDate = $toDate;

        return $new;
    }
}

