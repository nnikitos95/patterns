<?php

namespace DPRDIO\Structural\Adapter;

class Kindle implements EBookInterface
{
    /**
     * @var int
     */
    private $page = 1;

    private $totalPages = 100;

    public function unlock()
    {
    }

    public function pressNext()
    {
        $this->page++;
    }

    /**
     * returns current page and number of pages, like [10, 100] is 10 of 100
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}