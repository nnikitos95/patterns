<?php

namespace DPRDIO\Creational\Builder\Parts;

class Door implements Part
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Door';
    }
}