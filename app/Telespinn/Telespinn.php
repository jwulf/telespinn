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

    public static function isIndex() {
        return (\Telespinn\URL::getSegment()) ? false : true;
    }

    public static function isNotIndex() {
        return (self::isIndex() == false) ? true : false;
    }
}
