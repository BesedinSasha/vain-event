<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/5/16
 * Time: 9:43 AM
 */

namespace Vain\Event;

abstract class AbstractEvent implements EventInterface
{
    private $name;

    /**
     * AbstractEvent constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}