<?php

namespace MCadare\FlashMessageHandler\Factory;

use MCadare\FlashMessageHandler\Entity\FlashMessage;
use MCadare\FlashMessageHandler\Entity\FlashMessageInterface;

/**
 * Classe FlashMessageFactory
 *
 * Default Flash Message Factory
 *
 * Projet : mcadare_bundles
 * Fichier créé par meven.cadare le 21/07/2015 à 16:48
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 */
class FlashMessageFactory implements FlashMessageFactoryInterface
{

    /**
     * Build a flash Message object
     *
     * @param $code
     * @param $content
     * @param $level
     * @param array $parameters
     *
     * @return FlashMessageInterface
     * @internal param $message
     */
    public function build($code, $content, $level, $parameters = [])
    {
        $flashMessage = new FlashMessage();
        $flashMessage->setCode($code);
        $flashMessage->setMessage($content);
        $flashMessage->setLevel($level);

        //replace values if necessary
        if (count($parameters) > 0) {
            $patterns     = array_keys($parameters);
            $replacements = array_values($parameters);

            $content = str_replace($patterns, $replacements, $content);
        }

        $flashMessage->setMessage($content);

        return $flashMessage;
    }
}
