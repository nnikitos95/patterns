<?php

namespace DPRDIO\Creational\AbstractFactory;

class JsonParser implements Parser
{
    /**
     * @param string $input
     * @return array
     */
    public function parse(string $input): array
    {
        return json_decode($input, true);
    }
}