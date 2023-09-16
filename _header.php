<?php 
session_start();

include("fonctions/database.fn.php");
include("fonctions/article.fn.php");
include("fonctions/user.fn.php");
$config = include("config/config.php");

$db = getDatabaseLink($config["database"]);