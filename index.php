<?php

ini_set('display_errors', 'on');

use Drawing\Shapes\Rectangle;
use Drawing\Shapes\Ellipse;
use Drawing\Renderers\ShapeContainer;
use Drawing\Renderers\SvgRenderer;
use Drawing\Renderers\CssRenderer;

// La fonction callback prend un paramètre (dont le nom est arbitraire) 
// et représente le nom de la classe que l'on a essayé de charger
// La fonction callback est appelée à chaque fois que l'on essaie d'instancier une classe
spl_autoload_register(function ($className) {
    $classFile = str_replace('\\', '/', $className) . '.php';
    require $classFile;
});

// $renderer = new SvgRenderer();
$renderer = new CssRenderer();
$element = 'div';

$rectangle = new Rectangle(100, 100, 'limegreen', 0.8, 200, 150);
$ellipse = new Ellipse(350, 350, 'firebrick', 0.7, 40, 80);

$container = new ShapeContainer(800, 600, $renderer, $element);

$container
    ->addShape($rectangle)
    ->addShape(new Rectangle(0, 0, 'blue', 0.5, 50, 100))
    ->addShape($ellipse);

require 'index.phtml';