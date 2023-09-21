<?php

$articleRepository = new ArticleRepository();
$eventRepository = new EventRepository();

$articles = $articleRepository->getLatestArticles($db, 5, true);
$events = $eventRepository->getLatestEvents($db, 5, true);
  
require("view/homepage.php");