<?php

namespace DPRDIO\Structural\Bridge;

abstract class Service
{
    /**
     * @var FormatterInterface
     */
    protected $implementation;

    /**
     * Service constructor.
     * @param FormatterInterface $printer
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->setImplementation($printer);
    }

    /**
     * @param FormatterInterface $printer
     */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}