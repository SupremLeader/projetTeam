<ul class="nav nav2 nav-pills">

    <li><a href="/">Date</a></li>
    <li><a href="/">Prix</a></li>
    <li><a href="/">Departement</a></li>

    <li><form action="" method="get">

        <ul class="nav nav-pills">
            <!--            <p><li><label>Recherche</label></li>-->

            Recherche membre: <input type="text" name="recherche" ><br>
            <input type="submit" value="Envoyer" >
        </ul>

        </form> 
    </li>
</ul>


<?php
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

$recherche = $_GET['recherche'];

$sql = "SELECT * FROM departements WHERE departement_nom LIKE '".$recherche."'";
$req = $db->query($sql) or die(print_r($db->errorInfo()));

while($data = $req->fetch(PDO::FETCH_ASSOC)){
    echo  "ici" . "<h1>" . $data['departement_nom'] . "</h1>" . "<br/>";
}



?>


<?php
//
//if(isset($_POST["recherche"])) {
//
//    $recherche = addslashes($_POST["recherche"]);  
//
//    //echo 'Vous avez recherché : ' . $recherche . '<br />';      
//
//    try{
//        $db = new PDO('mysql:host=localhost;dbname=projetteam;charset=utf8', $user, $password);
//        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//    }
//    catch(PDOException $e){
//        echo 'Erreur : '.$e->getMessage();
//        echo 'N° : '.$e->getCode();
//    };
//    
//
//    $requete = "SELECT * FROM annonces WHERE photo3 LIKE '$recherche' ";  
//
//    // Exécution de la requête SQL
//    $resultat = $db->query($requete) or die(print_r($db->errorInfo()));
//    echo 'Les résultats de recherche sont :'  . '<br />'; 
//    
//    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) { 
//        print_r($donnees);
//        //echo $donnees['photo3'] . "<br/>";
//    };
//
//}

?>

