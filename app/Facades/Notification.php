<?php

namespace App\Facades;

class Notification
{
    public static function resolveFacade($name)
    {
        return app()[$name];
    }


    public static function __callStatic($method, $arguments)
    {
        return (self::resolveFacade('NotificationService'))
            ->{$method(...$arguments)};
    }
}
