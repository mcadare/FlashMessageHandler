<?php

namespace MCadare\FlashMessageHandler\Entity;

/**
 * Classe FlashMessage
 *
 * FlashMessage default entity
 *
 * Projet : mcadare_bundles
 * Fichier créé par meven.cadare le 21/07/2015 à 16:44
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 */
class FlashMessage implements FlashMessageInterface
{
    /**
     * flash message unique reference
     *
     * @var string
     */
    protected $code;

    /**
     * flash message content
     *
     * @var string
     */
    protected $message;

    /**
     * flash message criticity level
     *
     * @var string
     */
    protected $level;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }
}
