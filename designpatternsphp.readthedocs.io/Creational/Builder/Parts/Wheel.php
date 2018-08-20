<?php

namespace DPRDIO\Creational\Builder\Parts;

class Wheel implements Part
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Wheel';
    }
}