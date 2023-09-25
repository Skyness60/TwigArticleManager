<?php 

namespace App\Core;

use App\Lib\Database;

class Repository 
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}