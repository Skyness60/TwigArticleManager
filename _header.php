<?php 
session_start();

include("fonctions/database.fn.php");
require __DIR__ . '/vendor/autoload.php';

$config = include("config/config.php");

$db = getDatabaseLink($config["database"]);

$loader = new \Twig\Loader\FilesystemLoader([
    'view',
    'view/template'
]);

$twig = new \Twig\Environment($loader, []);