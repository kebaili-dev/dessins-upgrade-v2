<?php

namespace Drawing\Shapes;

use Drawing\Renderers\Renderer;

class Ellipse extends Shape
{
    protected int $rx;
    protected int $ry;

    public function __construct(int $x, int $y, string $color, float $opacity, int $rx, int $ry)
    {
        parent::__construct($x, $y, $color, $opacity);
        $this->rx = $rx;
        $this->ry = $ry;
    }
    
    public function draw(Renderer $renderer): string
    {
        return $renderer->drawEllipse($this->x, $this->y, $this->rx, $this->ry, $this->color, $this->opacity);
    }
    
    /**
     * @return int
     */
    public function getRx(): int
    {
        return $this->rx;
    }

    /**
     * @param int $rx
     */
    public function setRx(int $rx): void
    {
        $this->rx = $rx;
    }

    /**
     * @return int
     */
    public function getRy(): int
    {
        return $this->ry;
    }

    /**
     * @param int $ry
     */
    public function setRy(int $ry): void
    {
        $this->ry = $ry;
    }
}