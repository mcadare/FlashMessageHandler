<?php

namespace MCadare\FlashMessageHandler\Factory;

use MCadare\FlashMessageHandler\Entity\FlashMessageInterface;

/**
 * Created by PhpStorm.
 * User: meven.cadare
 * Date: 21/07/2015
 * Time: 17:29
 */
interface FlashMessageFactoryInterface
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
     */
    public function build($code, $content, $level, $parameters = []);
}
