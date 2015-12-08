<?php
session_start();
require_once('connexionBDD.php');

if(isset($_POST["go"])) {
    
    $stmt = $db->prepare("SELECT * FROM membres WHERE email=?");
    $stmt->execute(array($_POST["email"]));
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($result) {
    if (password_verify($_POST["password"], $result["password"])) {
    $_SESSION["user"]["id"] = $result["id"];
    $_SESSION["user"]["prenom_nom"] = $result["prenom"] . " " . $result["nom"];
    }else {
        echo "Qui es tu étranger ?";
    }
}
   
}

?>
    <!doctype html>
    <html lang=fr>

    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
    </head>

    <body>
        <a href="index.php">Home</a> <a href="aide.php">Aide</a> <a href="services.php">Services</a>
        <hr />
        <?php
            if(isset($_SESSION["user"])) {
            
            echo "Bonjour " . $_SESSION["user"]["prenom_nom"];
        
            }
        
        ?>
        <form method="POST">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="go" value="Se connecter">
            <a href="oubli.php">mot de passe oublié ?</a>

        </form>
    </body>

    </html>