<?php

session_start();

// connexion à la base de données
$user = "duchaine";
$password = "1987";

// avec gestion exception

try {
    
    $db = new PDO('mysql:host=localhost;dbname=projetteam;charset=utf8', $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // mode de gestion d'erreur
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $ex) {
    echo "ERREUR...";
}

?>

                             <?php

if (isset($_POST["login"])) {

    $stmt = $db->prepare("SELECT * FROM vendeurs WHERE email=?");
    $stmt->execute(array($_POST["email"]));

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        if ( password_verify($_POST["mdp"], $result["mdp"])){
            
            echo "<ul class='cent_nav nav'>" . "<span>" . "<h4>" .  "Bienvenue " . $result["prenom"] . " " . $result["nom"] . "." . "</h4>" . "</span>" . "</ul>";
            
            // ouverture et maintien de la session 
            $_SESSION["user"]["id"] = $result["id"];
            $_SESSION["user"]["prenom_nom"] = $result["prenom"] . " " . $result["nom"];
            
        } else {
            
            echo "<h4>" . "<span>" . " Erreur : Mauvais Password ou E-mail !" . "</h4>" . "</span>";
        }
    }
    
}



?>  
  
  
   <li><form method="post"> <!-- LOGIN -->
                        <li> 
                            <input id="connexion" type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="connexion">
                                                           
                            
                            <ul class="dropdown-menu">
                                <li><p><label>E-mail</label></p></li>
                                <li><p><span><input type="eamil" name="email"></span></p></li>
                                <li><p><label>Mot de passe</label></p></li>
                                <li><p><span><input type="password" id="mdp" name="mdp"></span></p></li>
                                <li><p><input type="submit" name="login" value="login"></p></li>    
                                
                            </ul>
                        </li>
                        </form> 
                    </li><!-- END LOGIN -->
                    
            