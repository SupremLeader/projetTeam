<?php
session_start();
if (isset($_POST["login"])) {

    $stmt = $db->prepare("SELECT * FROM vendeurs WHERE email=?");
    $stmt->execute(array($_POST["email"]));

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        if ( password_verify($_POST["mdp"], $result["mdp"])){
            
            echo "<span>" . "<h4>" .  "Bienvenue " . $result["prenom"] . " " . $result["nom"] . "." . "</span>" . "</h4>";
            
            // ouverture et maintien de la session 
            $_SESSION["user"]["id"] = $result["id"];
            $_SESSION["user"]["prenom_nom"] = $result["prenom"] . " " . $result["nom"];
            
        } else {
            
            echo "<h4>" . "<span>" . " Error : Wrong Password !" . "</h4>" . "</span>";
        }
    }
    
}



?>

   <li><form method="post"> <!-- LOGIN -->
                        <li> 
                            <input id="connexion" type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="connexion">
                            
                            <ul class="dropdown-menu">
                                <li><p><label>E-mail</label></p></li>
                                <li><p><input type="eamil" name="email"></p></li>
                                <li><p><label>Mot de passe</label></p></li>
                                <li><p><input type="password" id="mdp" name="mdp"></p></li>
                                <li><p><input type="submit" name="login" value="login"></p></li>    
                            </ul>
                        </li>
                        </form> 
                    </li><!-- END LOGIN -->