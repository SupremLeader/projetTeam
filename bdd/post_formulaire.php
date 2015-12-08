<?php
session_start();
require_once('bdd/connexionBDD.php');

try{
    // envoi form bdd
    if (isset($_POST["valider"])) {

        
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mdp = trim($_POST["mdp"]);
        $email = trim($_POST["email"]);
        $adresse = $_POST["adresse"];
        $cp = $_POST["cp"];
        $ville = $_POST["ville"];
        $tel = $_POST["tel"];
        $cg = (isset($_POST["cg"]));

        //secu mail - password
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($mdp)) {
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);

            

            $stmt = $db->prepare("INSERT INTO vendeurs ( nom, prenom, mdp, email, adresse, cp, ville, tel) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute(array( $nom, $prenom, $mdp, $email, $adresse, $cp, $ville, $tel));
        }
    }
    
} catch(PDOException $ex) {
    echo $ex->getMessage(); 
}

foreach ($_POST as $key => $value) {

    if (empty($value)){
        echo " <span style='color:red'> le champ " . $key . " est vide </span> <br/>"; 
    } 
}


?>

<!-- ------------------------- FORMULAIRE -------------------------------------- -->

<form class="form-horizontal" method="post">

    <fieldset>

        <!-- Formualire Name -->
        <legend>Inscription</legend>


        <!-- Name -->
        <div class="form-group required">
            <label class="col-md-4 control-label" for="nom">Nom</label>  
            <div class="col-md-4"><p>
                <input id="nom" name="nom" type="text" class="form-control input-md" value="<?= (isset($nom)) ? $nom : ""  ?>"> <?php if (isset($_POST["valider"])) { if (empty($_POST["nom"])) { echo  "<span> le champ Nom est obligatoire </span> </br>";}} ?>
                </p></div>
        </div>

        <!-- Prenom -->
        <div class="form-group required">
            <label class="col-md-4 control-label" for="prenom">Prenom</label>  
            <div class="col-md-4"><p>
                <input id="prenom" name="prenom" type="text" class="form-control input-md" value="<?= (isset($prenom)) ? $prenom : ""?>"> <?php
    if(isset($_POST["valider"])){
        if(empty($_POST["prenom"]))
        {echo  "<span> le champ Prenom est obligatoire</span> </br>";}} ?>
                </p></div>
        </div>

        <!-- mdp -->
        <div class="form-group required">
            <label class="col-md-4 control-label" for="mdp">Mot de passe</label>  
            <div class="col-md-4"><p>
                <input id="mdp" name="mdp" type="mdp" class="form-control input-md"> <?php
                if(isset($_POST["valider"])){
                    if(empty($_POST["mdp"]))
                    {echo  "<span> le champ Mot de passe est obligatoire</span> </br>";}} ?>
                <?php  ?>
                </p></div>
        </div>

        <!-- Adresse -->
        <div class="form-group required">
            <label class="col-md-4 control-label" for="adresse">Adresse</label>  
            <div class="col-md-4"><p>
                <input id="adresse" name="adresse" type="text" class="form-control input-md" value="<?= (isset($adresse)) ? $adresse : ""?>"> <?php
    if(isset($_POST["valider"])){
        if(empty($_POST["adresse"]))
        {echo  "<span> le champ Adresse est obligatoire</span> </br>";}} ?>

                <p></div>
        </div>

        <!-- Cp -->
        <div class="form-group required">
            <label class="col-md-4 control-label" for="cp">Code Postal</label>  
            <div class="col-md-4"><p>
                <input id="cp" name="cp" type="text" class="form-control input-md" value="<?= (isset($cp)) ? $cp : ""?>"> <?php
    if(isset($_POST["valider"])){
        if(empty($_POST["cp"]))
        {echo  "<span> le champ Code Postal est obligatoire</span> </br>";}} ?>

                </p></div>
        </div>

        <!-- City -->
        <div class="form-group required">
            <label class="col-md-4 control-label" for="ville">Ville</label>  
            <div class="col-md-4"><p>
                <input id="ville" name="ville" type="text" class="form-control input-md" vvalue="<?= (isset($ville)) ? $ville : ""?>"> <?php
    if(isset($_POST["valider"])){
        if(empty($_POST["ville"]))
        {echo  "<span> le champ Ville est obligatoire</span> </br>";}} ?>
                </p></div>
        </div>

        <!-- MAIL -->
        <div class="form-group required">
            <label class="col-md-4 control-label" for="email">E-mail</label>  
            <div class="col-md-4"><p>
                <input id="_mail" name="email" type="email" class="form-control input-md" value="<?= (isset($email)) ? $email : ""?>"> <?php
    if(isset($_POST["valider"])){
        if(empty($_POST["email"]))
        {echo  "<span> le champ E-mail est obligatoire</span> </br>";}} ?>

                </p></div>
        </div>

        <!-- tel -->
        <div class="form-group required">
            <label class="col-md-4 control-label" for="tel">tel</label>  
            <div class="col-md-4"><p>
                <input id="tel" name="tel" type="tel" class="form-control input-md" value="<?= (isset($tel)) ? $tel : ""?>"> <?php
    if(isset($_POST["valider"])){
        if(empty($_POST["tel"]))
        {echo  "<span> le champ tel est obligatoire</span> </br>";}} ?>

                </p></div>
        </div>
        

        <!-- User condition -->
        <div class="form-group required">
            <label class="col-md-4 control-label" for="cg">Conditions d'utilisations</label>
            <div class="col-md-4"><p>
                <label class="checkbox-inline" for="cg">
                    <p><input type="checkbox" name="cg" id="cg" value="<?= (isset($cg)) ? $cg : ""?>"> 
                        J'accepte les conditions d'utilisations</p>
                    <?php
    if(isset($_POST["valider"])){
        if(empty($_POST["cg"]))
        {echo  "<span> Les Conditions d'utilisations sont obligatoire </span> </br>";}} ?>
                </label>
                </p></div>
        </div>

        <!-- submit -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="valider"></label>
            <div class="col-md-4">
                <p><input type="submit" id="valider" name="valider" value="valider" class="btn btn-success"></p>
            </div>
        </div>

    </fieldset>
</form>