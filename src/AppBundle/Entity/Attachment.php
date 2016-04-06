<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Attachment
{

    /** @var string */
    private $fallback;

    /** @var string */
    private $text;

    /** @var string */
    private $color;

    /** @var Field[]|ArrayCollection */
    private $fields;

    /**
     * Attachment constructor.
     */
    public function __construct()
    {
        $this->fields = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getFallback() : string
    {
        return $this->fallback;
    }

    /**
     * @param string $fallback
     *
     * @return Attachment
     */
    public function setFallback(string $fallback) : Attachment
    {
        $this->fallback = $fallback;

        return $this;
    }

    /**
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return Attachment
     */
    public function setText(string $text) : Attachment
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return Attachment
     */
    public function setColor(string $color) : Attachment
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Field[]
     */
    public function getFields() : array
    {
        return $this->fields->toArray();
    }

    /**
     * @param Field $field
     *
     * @return Attachment
     */
    public function addField(Field $field) : Attachment
    {
        if (!$this->fields->contains($field)) {
            $this->fields->add($field);
        }

        return $this;
    }

    /**
     * @param Field $field
     *
     * @return Attachment
     */
    public function removeField(Field $field) : Attachment
    {
        $this->fields->removeElement($field);

        return $this;
    }
}
