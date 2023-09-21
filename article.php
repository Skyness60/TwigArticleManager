<?php

require("_header.php");

$repository = new ArticleRepository();
$id = (int) $_GET['id'];
$articleId = $repository->getArticle($db, $id);


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
            <h2><?=$articleId->getTitle() ?></h2>
            <p><?=$articleId->getContent() ?></p>
            <img src="<?=$articleId->getImage() ?>" alt="<?=$articleId->getTitle() ?>"/>
            <p>L'article est publié depuis le <?=$articleId['created_at'] ?></p>
          </li>
        </ul>
      </article>
    </main>
    </div>

    <!-- Le pied de page -->

    <?php include("template/footer.php") ?>

    </body>
</html>