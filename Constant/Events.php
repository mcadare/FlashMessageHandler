<?php

namespace MCadare\FlashMessageHandler\Constant;


/**
 * Classe Events
 *
 * Class defining event name constants
 *
 * Projet : mcadare_bundles
 * Fichier cr�� par meven.cadare le 28/07/2015 � 10:46
 *
 * @copyright Copyright mcadare_bundles � 2015, All Rights Reserved
 * @author    MCADARE
 * @package MCadare\FlashMessageHandler\Constants
 */
final class Events
{
    /**
     * L'�v�nement flash.message est cr�� � chaque fois qu'un message doit �tre affich� � l'utilisateur.
     *
     * Le � listener � de l'�v�nement re�oit une instance de
     * MCadare\FlashMessageHandler\Event\FlashMessageAwareInterface
     *
     * @var string
     */
    const FLASH_MESSAGE = 'flash.message';
}
