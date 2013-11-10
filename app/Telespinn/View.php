<?php

namespace Telespinn;

class View extends \Slim\View
{
    public function render($template)
    {
        $data = $this->data;
        $flash = $this->data['flash'];

        require "templates/{$template}.php";
    }
}
