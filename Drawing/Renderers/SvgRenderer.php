<?php

namespace Drawing\Renderers;

class SvgRenderer implements Renderer
{
    public function drawRectangle(int $x, int $y, int $width, int $height, string $color, float $opacity): string
    {
        return sprintf('<rect x="%s" y="%s" width="%s" height="%s" fill="%s" opacity="%s"></rect>', 
            $x, 
            $y, 
            $width, 
            $height, 
            $color, 
            $opacity
        );
    }

    public function drawEllipse(int $x, int $y, int $rx, int $ry, string $color, float $opacity): string
    {
        return sprintf('<ellipse cx="%s" cy="%s" rx="%s" ry="%s" fill="%s" opacity="%s"></ellipse>', 
            $x, 
            $y, 
            $rx, 
            $ry, 
            $color, 
            $opacity
        );
    }
}