<?php
session_start();
?>
<!doctype html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <a href="index.php">Home</a> <a href="aide.php">Aide</a> <a href="services.php">Services</a>
        <hr />
        <?php
        if(isset($_SESSION["user"])) { ?>            
        Bonjour <?= $_SESSION["user"]["prenom_nom"] ?><a href="deconnexion.php">Déconnexion</a>
        <?php }
        else { ?>
        <a href="connexion.php">Connexion</a> - <a href="inscription.php">Inscription</a>";
        <?php } ?>
        <h1>Aide</h1>

    </body>
</html>