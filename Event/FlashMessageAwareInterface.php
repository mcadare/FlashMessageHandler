<?php
namespace MCadare\FlashMessageHandler\Event;

/**
 * Interface FlashMessageAwareInterface
 *
 * Interface which should be implemented by any Event handling a flash message
 *
 * @package MCadare\FlashMessageHandler\Event
 */
interface FlashMessageAwareInterface
{
    /**
     * flash message unique reference
     *
     * @return string
     */
    public function getFlashMessageCode();

    /**
     * return an associative array of pattern and values to replace in the flash message content
     *
     * @return array
     */
    public function getFlashMessageParameters();

    /**
     * return flash message crticity level
     *
     * @return string
     */
    public function getLevel();
}
