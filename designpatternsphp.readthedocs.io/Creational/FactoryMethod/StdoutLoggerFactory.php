<?php

namespace DPRDIO\Creational\FactoryMethod;

class StdoutLoggerFactory implements LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}