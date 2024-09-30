<?php

namespace App\GpecBundle\Type;

class Attachment
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | string
     */
    private ?string $fileName = null;

    /**
     * @var null | mixed
     */
    private mixed $fileData = null;

    /**
     * @var int
     */
    private int $size;

    /**
     * @var string
     */
    private string $requestId;

    /**
     * @var bool
     */
    private bool $isBodyEmbedded;

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return static
     */
    public function withId(string $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }

    /**
     * @param null | string $fileName
     * @return static
     */
    public function withFileName(?string $fileName) : static
    {
        $new = clone $this;
        $new->fileName = $fileName;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getFileData() : mixed
    {
        return $this->fileData;
    }

    /**
     * @param null | mixed $fileData
     * @return static
     */
    public function withFileData(mixed $fileData) : static
    {
        $new = clone $this;
        $new->fileData = $fileData;

        return $new;
    }

    /**
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return static
     */
    public function withSize(int $size) : static
    {
        $new = clone $this;
        $new->size = $size;

        return $new;
    }

    /**
     * @return string
     */
    public function getRequestId() : string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return static
     */
    public function withRequestId(string $requestId) : static
    {
        $new = clone $this;
        $new->requestId = $requestId;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsBodyEmbedded() : bool
    {
        return $this->isBodyEmbedded;
    }

    /**
     * @param bool $isBodyEmbedded
     * @return static
     */
    public function withIsBodyEmbedded(bool $isBodyEmbedded) : static
    {
        $new = clone $this;
        $new->isBodyEmbedded = $isBodyEmbedded;

        return $new;
    }
}

