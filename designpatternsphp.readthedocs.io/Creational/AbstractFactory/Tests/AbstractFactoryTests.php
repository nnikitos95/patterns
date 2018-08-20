<?php

namespace DPRDIO\Creational\AbstractFactory\Tests;

use DPRDIO\Creational\AbstractFactory\CsvParser;
use DPRDIO\Creational\AbstractFactory\ParserFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTests extends TestCase
{
    public function testCatCreateCsvParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(true);

        $this->assertInstanceOf(CsvParser::class, $parser);
    }
}