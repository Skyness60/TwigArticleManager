<?php 

session_start();

require __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader([
    'view',
    'view/template'
]);

$twig = new \Twig\Environment($loader, []);