<?php

require("_header.php");
$id = (int) $_GET['id'];
$article = getArticle($db, $id);


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
    <article>
        <ul>
          <li>
            <h2><?=$article['title'] ?></h2>
            <p><?=$article['content'] ?></p>
            <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" />
            <p>L'article est publié depuis le <?=$article['created_at'] ?></p>
          </li>
        </ul>
      </article>
    </main>
    </div>

    <!-- Le pied de page -->

    <?php include("template/footer.php") ?>

    </body>
</html>