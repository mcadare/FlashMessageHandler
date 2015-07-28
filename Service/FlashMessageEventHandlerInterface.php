<?php
/**
 * Created by PhpStorm.
 * User: meven.cadare
 * Date: 22/07/2015
 * Time: 10:32
 */

namespace MCadare\FlashMessageHandler\Service;

use MCadare\FlashMessageHandler\Event\FlashMessageAwareInterface;

/**
 * Interface FlashMessageEventHandlerInterface
 * @package MCadare\FlashMessageHandler\Service
 */
interface FlashMessageEventHandlerInterface
{
    /**
     * Create Flashmessage object form event data and use the flash message service to send it to the user
     *
     * @param FlashMessageAwareInterface $event
     */
    public function handle(FlashMessageAwareInterface $event);
}
