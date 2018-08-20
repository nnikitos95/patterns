<?php

namespace DPRDIO\Creational\Prototype;

class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    public function __clone()
    {
    }
}