<?php

require("_header.php");
$perPage = 5;
$currentPage = (int) $_GET['page'];
$total = countArticles();
$lastPage = ceil($total / $perPage);
$articles = getArticles($currentPage, $perPage);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
        <link rel="stylesheet" href="style.css">
    </head>
 
    <body>
 
    <!-- L'en-tête -->

    <?php include("template/header.php") ?>

    <!-- Le corps -->

    <div id="corps">
    <main>
    <?php foreach ($articles as $article) : ?>
        <article>
        <ul>
          <li>
            <h2><?=$article['title'] ?></h2>
            <a href="article.php?id=<?=$article['id'] ?>">Voir plus...</a>
            <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" />
            <p>L'article est publié depuis le <?=$article['created_at'] ?></p>
          </li>
        </ul>
      </article>
    <?php endforeach; ?>

    <ul>
      <?php if ($currentPage > 1) : ?>
        <li><a href="index.php?page=<?=($currentPage - 1) ?>">&leftarrow;</a></li>
      <?php endif; ?>
      <?php for ($i = 1; $i <= $lastPage; $i++) : ?>
        <li><a href="index.php?page=<?=$i?>"><?=$i?></a></li>
      <?php endfor; ?>
      <?php if ($currentPage < $lastPage) : ?>
        <li><a href="index.php?page=<?=($currentPage + 1) ?>">&rightarrow;</a></li>
      <?php endif; ?>
    </ul>

    </main>
    </div>



    <!-- Le pied de page -->

    <?php include("template/footer.php") ?>

    </body>
</html>