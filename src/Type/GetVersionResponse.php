<?php

namespace Gpec\GpecBundle\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetVersionResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $getVersionResult = null;

    /**
     * @return null | string
     */
    public function getGetVersionResult() : ?string
    {
        return $this->getVersionResult;
    }

    /**
     * @param null | string $getVersionResult
     * @return static
     */
    public function withGetVersionResult(?string $getVersionResult) : static
    {
        $new = clone $this;
        $new->getVersionResult = $getVersionResult;

        return $new;
    }
}

