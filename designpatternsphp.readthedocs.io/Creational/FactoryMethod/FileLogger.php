<?php

namespace DPRDIO\Creational\FactoryMethod;

class FileLogger implements Logger
{
    /**
     * @var string
     */
    protected $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}