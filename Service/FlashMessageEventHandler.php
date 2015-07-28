<?php
namespace MCadare\FlashMessageHandler\Service;

use MCadare\FlashMessageHandler\Event\FlashMessageAwareInterface;
use MCadare\FlashMessageHandler\Factory\FlashMessageFactoryInterface;

/**
 * Classe FlashMessageEventHandler
 *
 * Projet : mcadare_bundles
 * Fichier créé par meven.cadare le 21/07/2015 à 17:34
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 */
class FlashMessageEventHandler implements FlashMessageEventHandlerInterface
{
    /**
     * @var FlashMessageServiceInterface
     */
    protected $flashMessageService;

    /**
     * @var FlashMessageFactoryInterface
     */
    protected $flashMessageFactory;

    /**
     * messages configuration
     *
     * @var array
     */
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Create Flashmessage object form event data and use the flash message service to send it to the user
     *
     * @param FlashMessageAwareInterface $event
     */
    public function handle(FlashMessageAwareInterface $event)
    {
        $code = $event->getFlashMessageCode();

        if (!isset($this->config[$code])) {
//            throw new \Exception("Unknown message");
            return;
        }

        $content    = $this->config[$code];
        $level      = $event->getLevel();
        $parameters = $event->getFlashMessageParameters();

        $flashMessage = $this->getFlashMessageFactory()->build(
            $code,
            $content,
            $level,
            $parameters
        );

        $this->getFlashMessageService()->addMessage($flashMessage);
    }

    /**
     * @return FlashMessageServiceInterface
     */
    public function getFlashMessageService()
    {
        return $this->flashMessageService;
    }

    /**
     * @param FlashMessageServiceInterface $flashMessageService
     */
    public function setFlashMessageService(FlashMessageServiceInterface $flashMessageService)
    {
        $this->flashMessageService = $flashMessageService;
    }

    /**
     * @return FlashMessageFactoryInterface
     */
    public function getFlashMessageFactory()
    {
        return $this->flashMessageFactory;
    }

    /**
     * @param FlashMessageFactoryInterface $flashMessageFactory
     */
    public function setFlashMessageFactory(FlashMessageFactoryInterface $flashMessageFactory)
    {
        $this->flashMessageFactory = $flashMessageFactory;
    }
}
