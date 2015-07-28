<?php

namespace MCadare\FlashMessageHandler\Service;

use MCadare\FlashMessageHandler\Entity\FlashMessageInterface;

/**
 * Classe FlashMessageServiceInterface
 *
 * Projet : mcadare_bundles
 * Fichier crיי par meven.cadare le 21/07/2015 א 16:47
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 */
interface FlashMessageServiceInterface
{
    /**
     * add a Flash Message
     *
     * @param FlashMessageInterface $flashMessage
     * @return mixed
     */
    public function addMessage(FlashMessageInterface $flashMessage);

    /**
     * remove a flash message
     *
     * @param FlashMessageInterface $flashMessage
     * @return mixed
     */
    public function deleteMessage(FlashMessageInterface $flashMessage);
}
