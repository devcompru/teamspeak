<?php
declare(strict_types=1);

namespace Devcompru\Teamspeak;
use TeamSpeak3;
class Connect
{
    private static ?TeamSpeak3 $_connection = null;
    private static $_server = null;
    public function __construct()
    {


    }

    public static function connect($url, $login, $password, $port)
    {
        if(is_null(static::$_connection))
        {
            static::$_connection ??= TeamSpeak3::factory($url);
            static::$_connection->login($login, $password);
            static::$_server = static::$_connection->serverGetByPort($port);
        }
        return static::$_server;
    }


}