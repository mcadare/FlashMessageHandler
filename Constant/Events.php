<?php

namespace MCadare\FlashMessageHandler\Constant;


/**
 * Classe Events
 *
 * Class defining event name constants
 *
 * Projet : mcadare_bundles
 * Fichier créé par meven.cadare le 28/07/2015 à 10:46
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 * @package MCadare\FlashMessageHandler\Constants
 */
final class Events
{
    /**
     * L'évènement flash.message est créé à chaque fois qu'un message doit être affiché à l'utilisateur.
     *
     * Le « listener » de l'évènement reçoit une instance de
     * MCadare\FlashMessageHandler\Event\FlashMessageAwareInterface
     *
     * @var string
     */
    const FLASH_MESSAGE = 'flash.message';
}
