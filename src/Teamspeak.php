<?php
declare(strict_types=1);

namespace Devcompru\Teamspeak;

use Devcompru\Teamspeak\Connect;
use Teampeak3;
use TeamSpeak3_Node_Server;


class Teamspeak
{

    private static ?TeamSpeak3_Node_Server $_server;

    public function __construct($config)
    {
        static::$_server = Connect::connect($config);
    }


    public function getServer(): TeamSpeak3_Node_Server
    {
        return static::$_server;
    }
    public function setGfxBanner(string $url):void
    {
        static::$_server->virtualserver_hostbanner_gfx_url = $url;

    }



}