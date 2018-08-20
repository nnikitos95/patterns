<?php

namespace DPRDIO\Creational\FactoryMethod\Tests;

use DPRDIO\Creational\FactoryMethod\FileLogger;
use DPRDIO\Creational\FactoryMethod\FileLoggerFactory;
use DPRDIO\Creational\FactoryMethod\StdoutLogger;
use DPRDIO\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogger()
    {
        $factory = new StdoutLoggerFactory();
        $logger = $factory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function canCreateFileLogger()
    {
        $factory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $factory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}