<?php

namespace App\Menu;

class ArrayMenuReader implements MenuReader
{
    public function readMenu() : array
    {
        return [
            ['href' => '/', 'text' => 'Homepage'],
            ['href' => '/about', 'text' => 'About'],
            ['href' => '/contact', 'text' => 'Contact'],
        ];
    }
}