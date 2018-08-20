<?php

namespace DPRDIO\Creational\Prototype\Tests;

use DPRDIO\Creational\Prototype\BarBookPrototype;
use DPRDIO\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooAndBarBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        $this->assertInstanceOf(FooBookPrototype::class, clone $fooPrototype);
        $this->assertInstanceOf(BarBookPrototype::class, clone $barPrototype);
    }
}