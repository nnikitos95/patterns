<?php

namespace DPRDIO\Structural\FluentInterface\Tests;

use DPRDIO\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSql()
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'fb')
            ->where('fb.bar = ?')
        ;

        $this->assertEquals('SELECT foo, bar FROM foobar AS fb WHERE fb.bar = ?', (string) $query);
    }
}