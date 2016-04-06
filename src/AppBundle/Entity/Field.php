<?php

namespace AppBundle\Entity;

class Field
{

    /** @var string */
    private $title;

    /** @var string */
    private $value;

    /** @var boolean */
    private $short = false;

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Field
     */
    public function setTitle(string $title) : Field
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return Field
     */
    public function setValue(string $value) : Field
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isShort() : bool
    {
        return $this->short;
    }

    /**
     * @param boolean $short
     *
     * @return Field
     */
    public function setShort(bool $short) : Field
    {
        $this->short = $short;

        return $this;
    }
}
