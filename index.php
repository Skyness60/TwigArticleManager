<?php

require("_header.php");

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
  header('Location: login.php');
  exit();
}

$repository = new ArticleRepository();
$perPage = 5;
$currentPage = (int) $_GET['page'];
$total = $repository->countArticles();
$lastPage = ceil($total / $perPage);
$articles = $repository->getArticles($db, $currentPage, $perPage);
// $articles = getArticles($db, $currentPage, $perPage);

require("view/homepage.php");
