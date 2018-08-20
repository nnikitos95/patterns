<?php

namespace DPRDIO\Creational\AbstractFactory;

interface Parser
{
    /**
     * @param string $input
     * @return array
     */
    public function parse(string $input): array;
}