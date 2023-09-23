<?php 

session_start();

require __DIR__ . '/vendor/autoload.php';

use App\Lib\Database;

$config = include("config/config.php");

$db = Database::connection($config["database"]);

$loader = new \Twig\Loader\FilesystemLoader([
    'view',
    'view/template'
]);

$twig = new \Twig\Environment($loader, []);