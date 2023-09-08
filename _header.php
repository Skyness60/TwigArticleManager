<?php 

include("fonctions/database.fn.php");
include("fonctions/article.fn.php");
$config = include("config/config.php");

$db = getDatabaseLink($config["database"]);