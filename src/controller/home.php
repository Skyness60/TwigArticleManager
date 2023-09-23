<?php

use App\Repository\ArticleRepository;
use App\Repository\EventRepository;

$articleRepository = new ArticleRepository($db);
$eventRepository = new EventRepository($db);

$articles = $articleRepository->getLatestArticles(5, true);
$events = $eventRepository->getLatestEvents(5, true);

echo $twig->render('homepage.html.twig', [
    'articles' => $articles,
    'events' => $events
]);