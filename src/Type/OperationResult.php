<?php

namespace App\GpecBundle\Type;

class OperationResult
{
    /**
     * @var 'WIP' | 'COMPLETE' | 'WARNING' | 'ERROR' | 'EXCEPTION'
     */
    private string $resultCode;

    /**
     * @var null | string
     */
    private ?string $resultMessage = null;

    /**
     * @var int
     */
    private int $errorCode;

    /**
     * @var null | string
     */
    private ?string $executionTime = null;

    /**
     * @var null | string
     */
    private ?string $trackingIdLog = null;

    /**
     * @return 'WIP' | 'COMPLETE' | 'WARNING' | 'ERROR' | 'EXCEPTION'
     */
    public function getResultCode() : string
    {
        return $this->resultCode;
    }

    /**
     * @param 'WIP' | 'COMPLETE' | 'WARNING' | 'ERROR' | 'EXCEPTION' $resultCode
     * @return static
     */
    public function withResultCode(string $resultCode) : static
    {
        $new = clone $this;
        $new->resultCode = $resultCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResultMessage() : ?string
    {
        return $this->resultMessage;
    }

    /**
     * @param null | string $resultMessage
     * @return static
     */
    public function withResultMessage(?string $resultMessage) : static
    {
        $new = clone $this;
        $new->resultMessage = $resultMessage;

        return $new;
    }

    /**
     * @return int
     */
    public function getErrorCode() : int
    {
        return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return static
     */
    public function withErrorCode(int $errorCode) : static
    {
        $new = clone $this;
        $new->errorCode = $errorCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getExecutionTime() : ?string
    {
        return $this->executionTime;
    }

    /**
     * @param null | string $executionTime
     * @return static
     */
    public function withExecutionTime(?string $executionTime) : static
    {
        $new = clone $this;
        $new->executionTime = $executionTime;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTrackingIdLog() : ?string
    {
        return $this->trackingIdLog;
    }

    /**
     * @param null | string $trackingIdLog
     * @return static
     */
    public function withTrackingIdLog(?string $trackingIdLog) : static
    {
        $new = clone $this;
        $new->trackingIdLog = $trackingIdLog;

        return $new;
    }
}

