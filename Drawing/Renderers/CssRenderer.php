<?php

namespace Drawing\Renderers;

class CssRenderer implements Renderer
{
    public function drawRectangle(int $x, int $y, int $width, int $height, string $color, float $opacity): string
    {
        return sprintf('<div style="position:absolute;left:%spx;top:%spx;width:%spx;height:%spx;background-color:%s;opacity:%s"></div>', 
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
        $width = $rx * 2;
        $height = $ry * 2;
        $relativeX = $x - $rx;
        $relativeY = $y - $ry;

        return sprintf('<div style="position:relative;left:%spx;top:%spx;width:%spx;height:%spx;border-radius:%spx / %spx;background-color:%s;opacity:%s"></div>',
            $relativeX, 
            $relativeY, 
            $width, 
            $height, 
            $rx, 
            $ry, 
            $color, 
            $opacity
        );
    }
}