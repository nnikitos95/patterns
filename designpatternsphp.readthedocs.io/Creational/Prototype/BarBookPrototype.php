<?php

namespace DPRDIO\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
    protected $category = 'Bar';

    public function __clone()
    {
    }
}