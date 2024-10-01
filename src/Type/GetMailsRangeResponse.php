<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMailsRangeResponse implements ResultInterface
{
    /**
     * @var null | \Gpec\GpecBundle\Type\GetMailsRangeResponse
     */
    private ?\Gpec\GpecBundle\Type\GetMailsRangeResponse $GetMailsFromDateToDateResponse = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\GetMailsRangeResponse
     */
    public function getGetMailsFromDateToDateResponse() : ?\Gpec\GpecBundle\Type\GetMailsRangeResponse
    {
        return $this->GetMailsFromDateToDateResponse;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\GetMailsRangeResponse $GetMailsFromDateToDateResponse
     * @return static
     */
    public function withGetMailsFromDateToDateResponse(?\Gpec\GpecBundle\Type\GetMailsRangeResponse $GetMailsFromDateToDateResponse) : static
    {
        $new = clone $this;
        $new->GetMailsFromDateToDateResponse = $GetMailsFromDateToDateResponse;

        return $new;
    }
}

