<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/5/16
 * Time: 9:45 AM
 */

namespace Vain\Event\Dispatcher;

use Vain\Event\EventInterface;

interface EventDispatcherInterface
{
    /**
     * @param EventInterface $event
     *
     * @return EventDispatcherInterface
     */
    public function dispatch(EventInterface $event);
}