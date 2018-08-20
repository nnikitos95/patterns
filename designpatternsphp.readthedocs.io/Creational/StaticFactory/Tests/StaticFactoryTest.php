<?php

namespace DPRDIO\Creational\StaticFactory\Tests;

use DPRDIO\Creational\StaticFactory\FormatNumber;
use DPRDIO\Creational\StaticFactory\FormatString;
use DPRDIO\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            FormatNumber::class,
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            FormatString::class,
            StaticFactory::factory('string')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('');
    }
}