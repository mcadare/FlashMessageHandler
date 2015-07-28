<?php
/**
 * Created by PhpStorm.
 * User: meven.cadare
 * Date: 28/07/2015
 * Time: 10:52
 */

namespace MCadare\FlashMessageHandler\Factory;


use MCadare\FlashMessageHandler\Event\FlashMessageAwareInterface;

/**
 * Interface FlashMessageEventFactoryInterface
 *
 * This interface should be implemented by any Factory building Flash Message Aware events
 *
 * @package MCadare\FlashMessageHandler\Factory
 */
interface FlashMessageEventFactoryInterface
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
    public function build($code, $level, $parameters = []);
}
