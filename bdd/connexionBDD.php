<?php
// connexion à la base de données
$user = "root";
$password = "";

// avec gestion exception

try {
    
    $db = new PDO('mysql:host=localhost;dbname=projetteam;charset=utf8', $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // mode de gestion d'erreur
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $ex) {
    echo "ERREUR...";
}



?>