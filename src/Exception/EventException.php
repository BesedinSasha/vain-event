<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/6/16
 * Time: 9:07 AM
 */

namespace Vain\Event\Exception;


use Vain\Core\Exception\CoreException;
use Vain\Event\EventInterface;

class EventException extends CoreException
{
    private $event;

    /**
     * EventException constructor.
     * @param EventInterface $event
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(EventInterface $event, $message, $code, \Exception $previous = null)
    {
        $this->event = $event;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return EventInterface
     */
    public function getEvent()
    {
        return $this->event;
    }
}