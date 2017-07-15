<?php

namespace App\Template;

class FrontendTwigRenderer implements FrontendRenderer
{
    private $renderer;

    function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function render($template, $data = []) : string
    {
        $data = array_merge($data, [
            'menuItems' => [
                ['href' => '/', 'text' => 'Homepage'],
            ],
            'menuClass' => 'main-nav'
        ]);

        return $this->renderer->render($template, $data);
    }
}