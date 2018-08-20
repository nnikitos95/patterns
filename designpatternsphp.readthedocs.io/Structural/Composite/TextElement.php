<?php

namespace DPRDIO\Structural\Composite;

class TextElement implements RenderableInterface
{
    /**
     * @var string
     */
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}