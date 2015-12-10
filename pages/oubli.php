<?php
require_once("connexionBdd.php");
//vérification de l'email: est-il dans la table membres ?
try {
    
  if(isset($_POST["go"])) {
    
    $stmt = $db->prepare("SELECT * FROM membres WHERE email=?");
    $stmt->execute(array($_POST["email"]));
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);  
    
  }else{
      echo "Qui êtes vous?";
  }
}catch(PDOException $ex) {
    echo "ERREUR...";
}












//si oui alors on envoie un mail à cette personne
//si non , on ne fait rien


//la construction de mail : 
//génération d'un token(jeton): chaine de caracteres
//$token = md5(uniqid(rand()), true);
//récupération de l'identifiant du memnbre (son id)

//table jetons (id, token)
//insertion de l'id et du jeton/token
//envoie du mail(lien: vers page mot_de_passe_oublié.php? id=X & token=xxxxxxxx)
//creation d'une page mot_de_passe_oublié.php
//on verifie que les id et token sont dans la base de données
//si oui on propose à l'utilistateur un formulaire pour ressaisir son password (+ confirmation du password)




?>
<!doctype html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <title>Réinitialisation de mot de passe</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="email" placeholder="email">
            <input type="submit" name="go" value="Valider">
            
            
            
            
            
            
            
            
        </form>
    </body>
</html>