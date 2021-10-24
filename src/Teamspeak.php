<?php
declare(strict_types=1);

namespace Devcompru\Teamspeak;

use Devcompru\Teamspeak\Connect;
use Teampeak3;
use TeamSpeak3_Node_Server;


class Teamspeak
{
    private  $_server;

    public function __construct($url, $login, $password, $port)
    {
        $this->_server = Connect::connect($url, $login, $password, $port);
    }


    


}