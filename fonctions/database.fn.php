<?php 

function getDatabaseLink($config)
{ 
    try {
        return new PDO(
            "mysql:host=" . $config["host"] . ";dbname=" . $config["dbname"] . ";charset=utf8",
            $config["username"],
            $config["password"]
        );
    } catch (Exception $e) {
        die("Erreur: " . $e->getMessage());
    }
}
