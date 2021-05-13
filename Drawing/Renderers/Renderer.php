<?php

namespace Drawing\Renderers;

interface Renderer
{
    public function drawRectangle(int $x, int $y, int $width, int $height, string $color, float $opacity): string;
    public function drawEllipse(int $x, int $y, int $rx, int $ry, string $color, float $opacity): string;
}