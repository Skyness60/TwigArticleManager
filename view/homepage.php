<?php

$title = "comme je veux";
ob_start();

?>

<?php foreach ($articles as $article) : ?>
  <article>
  <ul>
    <li>
      <h2><?=$article->getTitle() ?></h2>
      <p><?=$article->getContent() ?></p>
      <img src="<?=$article->getImage() ?>" alt="<?=$article->getTitle() ?>"/>
    </li>
  </ul>
</article>
<?php endforeach; ?>

<?php foreach ($events as $event) : ?>
  <article>
  <ul>
    <li>
      <h2><?=$event->getTitle() ?></h2>
      <p><?=$event->getContent() ?></p>
      <img src="<?=$event->getImage() ?>" alt="<?=$event->getTitle() ?>"/>
      <p>ça commence le <?=$event->getStartAt() ?></p>
      <p>ça dure <?=$event->getTime() ?></p>
      <p>ça coûte <?=$event->getPrice() ?></p>
    </li>
  </ul>
</article>
<?php endforeach; ?>

<?php 

$content = ob_get_clean();
require("template/layout.php");

?>