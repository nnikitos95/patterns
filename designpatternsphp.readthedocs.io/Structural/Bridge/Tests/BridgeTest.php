<?php

namespace DPRDIO\Structural\Bridge\Tests;

use DPRDIO\Structural\Bridge\HelloService;
use DPRDIO\Structural\Bridge\HtmlFormatter;
use DPRDIO\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlaintTextPrinter()
    {
        $service = new HelloService(new PlainTextFormatter());
        $this->assertEquals('Hello World', $service->get());

        $service->setImplementation(new HtmlFormatter());
        $this->assertEquals('<p>Hello World</p>', $service->get());
    }
}