<?php

namespace DPRDIO\Structural\Composite;

class Form implements RenderableInterface
{
    /**
     * @var RenderableInterface[]
     */
    protected $elements;

    /**
     * @return string
     */
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    /**
     * @param RenderableInterface $renderable
     */
    public function addElement(RenderableInterface $renderable)
    {
        $this->elements[] = $renderable;
    }
}