<?php

namespace AppBundle\Entity;

/**
 * Order domain class
 *
 * @author fduch
 */
class Order
{
    private $marking;

    /**
     * @return mixed
     */
    public function getMarking()
    {
        return $this->marking;
    }

    /**
     * @param mixed $marking
     */
    public function setMarking($marking)
    {
        $this->marking = $marking;
    }
}
