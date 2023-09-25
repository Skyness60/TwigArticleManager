<?php 

namespace App\Lib;

class Database
{
    protected \PDO $db;

    public function __construct() 
    {
        $config = require 'config/config.php';
        $database = $config['database'];

        $this->db = new \PDO(
            "mysql:host=" . $database["host"] . ";dbname=" . $database["dbname"] . ";charset=utf8",
            $database["username"],
            $database["password"]
        );
    }

    public function query($sql, $params)
    {
        $statement = $this->db->prepare($sql);

        $statement->execute($params);

        return $statement;
    }
}