<?php

namespace App\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsRangeResponse implements ResultInterface
{
    /**
     * @var null | \App\GpecBundle\Type\GetMailsRangeResponse
     */
    private ?\App\GpecBundle\Type\GetMailsRangeResponse $GetMailsFromDateToDateResponse = null;

    /**
     * @return null | \App\GpecBundle\Type\GetMailsRangeResponse
     */
    public function getGetMailsFromDateToDateResponse() : ?\App\GpecBundle\Type\GetMailsRangeResponse
    {
        return $this->GetMailsFromDateToDateResponse;
    }

    /**
     * @param null | \App\GpecBundle\Type\GetMailsRangeResponse $GetMailsFromDateToDateResponse
     * @return static
     */
    public function withGetMailsFromDateToDateResponse(?\App\GpecBundle\Type\GetMailsRangeResponse $GetMailsFromDateToDateResponse) : static
    {
        $new = clone $this;
        $new->GetMailsFromDateToDateResponse = $GetMailsFromDateToDateResponse;

        return $new;
    }
}

