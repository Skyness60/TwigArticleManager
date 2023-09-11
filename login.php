<?php 

require("_header.php");

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $username = $_POST["email"];
    $password = $_POST["password"];
    $connection = connection($db, $username, $password);
    if ($connection) {
        header('Location: index.php');
    } else {
        header('Location: login.php');
    }
}

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
        <form action="login.php" method="post">
        <!-- si message d'erreur on l'affiche -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
            <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </main>
    </div>

    <!-- Le pied de page -->

    <?php include("template/footer.php") ?>

    </body>
</html>