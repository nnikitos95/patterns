<?php

namespace DPRDIO\Creational\Builder\Vehicle;

use DPRDIO\Creational\Builder\Parts\Part;

abstract class Vehicle
{
    /**
     * @var Part[]
     */
    private $parts = [];

    /**
     * @param string $key
     * @param Part $part
     */
    public function setPart(string $key, Part $part)
    {
        $this->parts[$key] = $part;
    }
}