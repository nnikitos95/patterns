<?php

namespace DPRDIO\Structural\Facade\Tests;

use DPRDIO\Structural\Facade\BiosInterface;
use DPRDIO\Structural\Facade\Facade;
use DPRDIO\Structural\Facade\OsInterface;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OsInterface::class);

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder(BiosInterface::class)
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock()
        ;

        $bios->expects($this->once())
            ->method('launch')
            ->with($os)
        ;

        $facade = new Facade($bios, $os);

        $facade->turnOn();

        $this->assertEquals('Linux', $os->getName());
    }
}