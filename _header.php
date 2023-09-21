<?php 
session_start();

include("fonctions/database.fn.php");
// include("fonctions/article.fn.php");
include("fonctions/user.fn.php");
include("src/model/article/article.php");
include("src/model/article/articleRepository.php");
include("src/model/event/event.php");
include("src/model/event/eventRepository.php");
$config = include("config/config.php");

$db = getDatabaseLink($config["database"]);