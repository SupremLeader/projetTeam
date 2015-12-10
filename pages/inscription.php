<?php
require_once("connexionBDD.php");

try{

    if($_POST) {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]); //reserve

        if( filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $db->prepare("INSERT INTO vendeurs (nom, prenom, adresse, cp, ville, tel, email, password) VALUES(?,?,?,?,?,?,?,?)");
            $stmt->execute(array($_POST["nom"], $_POST["prenom"], $_POST["adresse"], $_POST["cp"], $_POST["ville"], $_POST["tel"], $email, $password )); 
        }
    }

}catch(PDOException $ex) {

    echo $ex->getMessage();
}

foreach ($_POST as $key => $value) {

    if (empty($value)){
        echo " <span style='color:red'> le champ " . $key . " est vide </span> <br/>"; 
    } 
}



?>
<!doctype html>
<html lang=fr>

    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
    </head>

    <body>
        <form method="POST">
            <input type="text" name="nom" placeholder="nom">
            <br/>
            <br/>
            <input type="text" name="prenom" placeholder="prenom">
            <br/>
            <br/>
            <input type="text" name="adresse" placeholder="adresse">
            <br/>
            <br/>
            <input type="text" name="cp" placeholder="code postal">
            <br/>
            <br/>
            <input type="text" name="ville" placeholder="ville">
            <br/>
            <br/>
            <input type="text" name="email" placeholder="email">
            <br/>
            <br/>
            <input type="password" name="password" placeholder="password">
            <br/>
            <br/>
            <input type="submit" name="go" value="S'inscrire">
            <br/>
            <br/>

        </form>
    </body>

</html>