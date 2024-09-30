<?php

namespace App\GpecBundle\Type;

use \App\GpecBundle\Type\GetMailByIdRequest;

class GetMailsAndReceiptsRequest extends GetMailByIdRequest
{
    /**
     * @var 'onlyHeaders' | 'allMessage' | 'uId'
     */
    private string $outType;

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

