<?php
namespace MCadare\FlashMessageHandler\Event;

/**
 * Classe FlashMessageEvent
 *
 * Default Flash message event object
 *
 * Projet : mcadare_bundles
 * Fichier créé par meven.cadare le 21/07/2015 à 14:09
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 */
class FlashMessageEvent implements FlashMessageAwareInterface
{
    /**
     * flash message unique reference
     *
     * @var string
     */
    protected $code;

    /**
     * associative array of pattern and values to replace in the flash message content
     *
     * @var array
     */
    protected $parameters;

    /**
     * flash message criticity level
     *
     * @var string
     */
    protected $level;

    public function __construct($code, $level, $parameters)
    {
        $this->code       = $code;
        $this->level      = $level;
        $this->parameters = $parameters;
    }

    /**
     * flash message unique reference
     *
     * @return string
     */
    public function getFlashMessageCode()
    {
        return $this->code;
    }

    /**
     * return an associative array of pattern and values to replace in the flash message content
     *
     * @return array
     */
    public function getFlashMessageParameters()
    {
        return $this->parameters;
    }

    /**
     * return flash message crticity level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }
}
