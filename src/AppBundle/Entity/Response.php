<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Response
{

    const VISIBLE_TO_USER = 'ephemeral';
    const VISIBLE_TO_CHANNEL = 'in_channel';

    /** @var ArrayCollection|Attachment[] */
    private $attachments;

    /** @var string */
    private $response_type = self::VISIBLE_TO_CHANNEL;

    /** @var string  */
    private $text = "";

    /**
     * Response constructor.
     */
    public function __construct()
    {
        $this->attachments = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getResponseType()
    {
        return $this->response_type;
    }

    /**
     * @param string $response_type
     */
    public function setResponseType($response_type)
    {
        $this->response_type = $response_type;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return Attachment[]
     */
    public function getAttachments() : array
    {
        return $this->attachments->toArray();
    }

    public function addAttachment(Attachment $attachment) : Response
    {
        if (!$this->attachments->contains($attachment)) {
            $this->attachments->add($attachment);
        }

        return $this;
    }

    public function removeAttachment(Attachment $attachment) : Response
    {
        $this->attachments->removeElement($attachment);

        return $this;
    }
}
