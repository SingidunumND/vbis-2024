<?php

namespace app\core;

use mysqli;
class DbConnection
{
    public function connect() : mysqli
    {
        return new mysqli("localhost", "root", "", "vbis");
    }
}