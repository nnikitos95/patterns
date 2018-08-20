<?php

namespace DPRDIO\Structural\Facade;

interface OsInterface
{
    public function halt();

    public function getName(): string;
}