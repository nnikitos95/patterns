<?php

namespace DPRDIO\Creational\Pool;

class StringReverseWorker
{
    /**
     * @var \DateTime
     */
    protected $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}