<?php

namespace DPRDIO\Creational\FactoryMethod;

interface LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger;
}