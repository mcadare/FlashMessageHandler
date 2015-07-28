<?php

namespace MCadare\FlashMessageHandler\Factory;

use MCadare\FlashMessageHandler\Event\FlashMessageAwareInterface;
use MCadare\FlashMessageHandler\Event\FlashMessageEvent;


/**
 * Classe FlashMessageEventFactory
 *
 * Default Flash Message Factory
 *
 * Projet : mcadare_bundles
 * Fichier crיי par meven.cadare le 28/07/2015 א 10:51
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 * @package MCadare\FlashMessageHandler\Factory
 */
class FlashMessageEventFactory implements FlashMessageEventFactoryInterface
{
    /**
     * build a Flash Message Aware event object
     *
     * @param $code
     * @param $level
     * @param array $parameters
     *
     * @return FlashMessageAwareInterface
     */
    public function build($code, $level, $parameters = [])
    {
        return new FlashMessageEvent($code, $level, $parameters);
    }
}
