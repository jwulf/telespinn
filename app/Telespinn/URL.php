<?php

namespace Telespinn;

class URL
{
    public static function getHost()
    {
        return $_SERVER['HTTP_HOST'];
    }

    public static function getRequest()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function getSegment($segment = 0)
    {
        $querySegments = explode('/', trim(self::getRequest(), '/'));

        return isset($querySegments[$segment]) ? $querySegments[$segment] : false;
    }

    public static function toBase()
    {
        return 'http://' . self::getHost();
    }

    public static function toSelf()
    {
        return 'http://' . self::getHost() . self::getRequest();
    }
}
