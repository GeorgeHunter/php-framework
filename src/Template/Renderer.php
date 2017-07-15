<?php

namespace App\Template;

interface renderer
{
    public function render($template, $data = []) : string;
}