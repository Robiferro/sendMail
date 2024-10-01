<?php

namespace Gpec\GpecBundle\Type;

class GPECHeaderResponse
{
    /**
     * @var null | \Gpec\GpecBundle\Type\OperationResult
     */
    private ?\Gpec\GpecBundle\Type\OperationResult $operationResult = null;

    /**
     * @return null | \Gpec\GpecBundle\Type\OperationResult
     */
    public function getOperationResult() : ?\Gpec\GpecBundle\Type\OperationResult
    {
        return $this->operationResult;
    }

    /**
     * @param null | \Gpec\GpecBundle\Type\OperationResult $operationResult
     * @return static
     */
    public function withOperationResult(?\Gpec\GpecBundle\Type\OperationResult $operationResult) : static
    {
        $new = clone $this;
        $new->operationResult = $operationResult;

        return $new;
    }
}

