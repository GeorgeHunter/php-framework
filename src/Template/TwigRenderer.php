<?php

namespace App\Template;

use Twig_Environment;

class TwigRenderer implements Renderer
{
    private $renderer;

    function __construct(Twig_Environment $renderer)
    {
        $this->renderer = $renderer;
    }
    
    public function render($template, $data = []) : string
    {
        return $this->renderer->render("$template.html", $data);
    }
}