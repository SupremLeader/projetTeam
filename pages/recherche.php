<ul class="nav nav2 nav-pills">

    <li><a href="/">Date</a></li>
    <li><a href="/">Prix</a></li>
    <li><a href="/">Departement</a></li>

<<<<<<< HEAD
    <li><form action="" method="get">

        <ul class="nav nav-pills">
            <!--            <p><li><label>Recherche</label></li>-->

            Recherche membre: <input type="text" name="recherche" ><br>
            <input type="submit" value="Envoyer" >
=======
    <li><form action="index.php" method="POST">

        <ul class="nav nav-pills">
            <p><li><label>Recherche</label></li>
                <input type="text" name="recherche" ><br>
                <input type="submit" value="ok" >
>>>>>>> 3a8adf172d00cf2daafdde097ecfc9f5c399c5b7
        </ul>

        </form> 
    </li>
</ul>


<?php
<<<<<<< HEAD
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

=======

if (isset($_POST["recherche"])) {

    $recherche = ($_POST["recherche"]);      

    try{

        $user = "duchaine";
        $password = "1987";

        $db = new PDO('mysql:host=localhost;dbname=projetteam;charset=utf8', $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    catch (PDOException $e){
        echo 'Erreur : '.$e->getMessage();
        echo 'N° : '.$e->getCode();
    };

    
    
if (isset($_POST['recherche'])) {

$recherche = addslashes($_POST['recherche']);  

echo 'Vous avez recherché : ' . $recherche . '<br />';
echo "Les résultats de recherche sont :" . "<br/>" . "<br/>"; 
		
	$requete = "SELECT id, pseudo, titre, photo1, texte, departement_id, cp_annonce, tel_annonce, prix
    FROM annonces
    WHERE titre LIKE '%". $recherche ."%' 
    OR departement_id LIKE '%". $recherche ."%' 
    OR pseudo LIKE '%". $recherche ."%'
    OR texte LIKE '%". $recherche ."%'
    OR photo1 LIKE '%". $recherche ."%'
    OR cp_annonce LIKE '%". $recherche ."%'
    OR email_annonce LIKE '%". $recherche ."%'
    OR prix LIKE '%". $recherche ."%'
    OR Date_post LIKE '%". $recherche ."%'
    OR tel_annonce LIKE '%". $recherche ."%'  ORDER BY id DESC LIMIT 10"; 
		
    // Exécution de la requête SQL
    $resultat = $db->query($requete) or die(print_r($db->errorInfo()));
    
    while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) { 
        
        // foreach ($db->query("SELECT * FROM annonces ORDER BY id DESC LIMIT 10") as $annonce) {

        echo <<<EOT
 <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 

	<div class="miniature" style="background-image:url(../uploads/$donnees[photo1])">
  		<div class="int ">
	  		<h4>$donnees[pseudo]</h4><p>$donnees[titre]</p>
            <p>$donnees[texte]</p>
            <h4>$donnees[prix]€</h4><p>$donnees[departement_id]</p>
		</div>
  	</div>

        <a href="../index.php?action=donnees&id=$donnees[id]" class="ribbon-container"> 
    <img class="miniature" style="background-image:url(../uploads/$donnees[photo1])"> 
    <span class="ribbon">Voir l'annonce</span> </a> </div>
  </div>
</div>
EOT;
   // }

        
	}

}

  
}


?>
>>>>>>> 3a8adf172d00cf2daafdde097ecfc9f5c399c5b7
