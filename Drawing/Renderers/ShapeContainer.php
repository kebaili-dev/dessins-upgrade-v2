<?php

namespace Drawing\Renderers;

use Drawing\Shapes\Shape;

class ShapeContainer
{
    protected int $width;
    protected int $height;
    protected Renderer $renderer;
    protected string $element;
    protected array $shapes;
    
    public function __construct(int $width, int $height, Renderer $renderer, string $element, array $shapes = [])
    {
        $this->width = $width;
        $this->height = $height;
        $this->renderer = $renderer;
        $this->element = $element;
        $this->shapes = $shapes;
    }
    
    public function addShape(Shape $shape): ShapeContainer
    {
        $this->shapes[] = $shape;
        
        // On renvoie la classe ShapeContainer pour pouvoir chaîner les appels de la fonction addShape
        return $this;
    }
    
    public function render(): string
    {
        // Ouverture de la balise SVG
        $html = sprintf('<%s width="%s" height="%s">', $this->element, $this->width, $this->height);
        
        // Ajout du texte de chacune des formes dans le svg
        foreach ($this->shapes as $shape) {
            $html .= $shape->draw($this->renderer);
        }
        
        // Fermeture de la balise
        $html .= "</{$this->element}>";
        
        return $html;
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
    
    /**
     * @return array
     */
    public function getShapes(): array
    {
        return $this->shapes;
    }

    /**
     * @param array $shapes
     */
    public function setShapes(array $shapes): void
    {
        $this->shapes = $shapes;
    }
}