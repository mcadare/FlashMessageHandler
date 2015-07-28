<?php

namespace MCadare\FlashMessageHandler\Entity;

/**
 * Interface FlashMessageInterface
 *
 * Interface which should be implement by any Flash Message entity
 *
 * @package MCadare\FlashMessageHandler\Entity
 */
interface FlashMessageInterface
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string $code
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @param string $message
     */
    public function setMessage($message);

    /**
     * @return string
     */
    public function getLevel();

    /**
     * @param string
     */
    public function setLevel($values);
}
