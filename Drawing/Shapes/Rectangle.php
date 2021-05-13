<?php

namespace Drawing\Shapes;

use Drawing\Renderers\Renderer;

class Rectangle extends Shape
{
    protected int $width;
    protected int $height;
    
    /**
     * Rectangle constructor.
     * @param int $x
     * @param int $y
     * @param string $color
     * @param float $opacity
     * @param int $width
     * @param int $height
     */
    public function __construct(int $x, int $y, string $color, float $opacity, int $width, int $height)
    {
        parent::__construct($x, $y, $color, $opacity);
        $this->width = $width;
        $this->height = $height;
    }
    
    public function draw(Renderer $renderer): string
    {
        return $renderer->drawRectangle($this->x, $this->y, $this->width, $this->height, $this->color, $this->opacity);
    }
    
    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
}