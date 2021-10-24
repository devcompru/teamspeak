<?php
declare(strict_types=1);

namespace Devcompru\Teamspeak;
use TeamSpeak3;
use TeamSpeak3_Node_Host;
use TeamSpeak3_Node_Server;
class Connect
{
    private static  ?TeamSpeak3_Node_Host $_connection = null;
    private static ?TeamSpeak3_Node_Server $_server = null;
    public function __construct()
    {


    }

    public static function connect($config):TeamSpeak3_Node_Server
    {
        $url = $config['url'];
        $login = $config['login'];
        $password = $config['password'];
        $port= $config['port'];

        if(is_null(static::$_connection))
        {
            static::$_connection = TeamSpeak3::factory($url);
            static::$_connection->login($login, $password);
            static::$_server = @static::$_connection->serverGetByPort($port);
        }
        return static::$_server;
    }


}