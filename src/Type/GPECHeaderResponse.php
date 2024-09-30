<?php

namespace App\GpecBundle\Type;

class GPECHeaderResponse
{
    /**
     * @var null | \App\GpecBundle\Type\OperationResult
     */
    private ?\App\GpecBundle\Type\OperationResult $operationResult = null;

    /**
     * @return null | \App\GpecBundle\Type\OperationResult
     */
    public function getOperationResult() : ?\App\GpecBundle\Type\OperationResult
    {
        return $this->operationResult;
    }

    /**
     * @param null | \App\GpecBundle\Type\OperationResult $operationResult
     * @return static
     */
    public function withOperationResult(?\App\GpecBundle\Type\OperationResult $operationResult) : static
    {
        $new = clone $this;
        $new->operationResult = $operationResult;

        return $new;
    }
}

