<?php

namespace Gpec\GpecBundle\Type;

use \Gpec\GpecBundle\Type\GetMailRequest;

class GetMailByIdRequest extends GetMailRequest
{
    /**
     * @var null | string
     */
    private ?string $id = null;

    /**
     * @var 'uId' | 'messageId'
     */
    private string $typeOfElement;

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @param null | string $id
     * @return static
     */
    public function withId(?string $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return 'uId' | 'messageId'
     */
    public function getTypeOfElement() : string
    {
        return $this->typeOfElement;
    }

    /**
     * @param 'uId' | 'messageId' $typeOfElement
     * @return static
     */
    public function withTypeOfElement(string $typeOfElement) : static
    {
        $new = clone $this;
        $new->typeOfElement = $typeOfElement;

        return $new;
    }
}

