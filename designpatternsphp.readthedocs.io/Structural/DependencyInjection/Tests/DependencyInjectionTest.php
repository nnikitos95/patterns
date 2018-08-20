<?php

namespace DPRDIO\Structural\DependencyInjection\Tests;

use DPRDIO\Structural\DependencyInjection\DatabaseConfiguration;
use DPRDIO\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'nikita', '123');
        $connection = new DatabaseConnection($config);

        $this->assertEquals('nikita:123@localhost:3306', $connection->getDsn());
    }
}