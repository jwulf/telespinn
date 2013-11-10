<?php

namespace Telespinn;

class Telespinn
{
    public static function dump($variable)
    {
        echo '<pre>';
        print_r($variable);
        echo '</pre>';
    }
}
