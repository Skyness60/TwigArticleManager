<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="style.css">
    </head>
 
    <body>
 
    <!-- L'en-tête -->

    <?php include("template/header.php") ?>

    <!-- Le corps -->
    <div id="corps">
        <?= $content ?>
    </div>
    <!-- Le pied de page -->

    <?php include("template/footer.php") ?>

    </body>
</html>