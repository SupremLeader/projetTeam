<?php
// connexion à la base de données
<<<<<<< HEAD:bdd/connexionBDD.php
$user = "Pascual";
$password = "123";
=======
$user = "root";
$password = "";
>>>>>>> 44dfa5838f168953ebf1355c5a5cb63dffc9e9c7:bdd/connexionBDD.php

// avec gestion exception

try {
    
    $db = new PDO('mysql:host=localhost;dbname=projetteam;charset=utf8', $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // mode de gestion d'erreur
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $ex) {
    echo "ERREUR...";
}



?>