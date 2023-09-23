<?php 

namespace App\Lib;

class Database
{
    public static function connection($config) 
    {
        return new \PDO(
            "mysql:host=" . $config["host"] . ";dbname=" . $config["dbname"] . ";charset=utf8",
            $config["username"],
            $config["password"]
        );
    }
}