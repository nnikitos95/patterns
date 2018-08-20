<?php

namespace DPRDIO\Creational\FactoryMethod;

class FileLoggerFactory implements LoggerFactory
{
    protected $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * @return Logger
     */
    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}