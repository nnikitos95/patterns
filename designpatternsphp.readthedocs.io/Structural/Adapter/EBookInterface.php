<?php

namespace DPRDIO\Structural\Adapter;

interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * returns current page and number of pages, like [10, 100] is 10 of 100
     * @return array
     */
    public function getPage(): array;
}