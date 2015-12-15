<!-- ------- HTML --------- BARRE DE RECHERCHE -------- -->

<ul class="nav nav2 nav-pills">

<<<<<<< HEAD
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
=======
    <!-- -------------  CHAMP DATE  ----------------- -->   
    <li><a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/">Date</a>
        <ul class="dropdown-menu date">
            <li>
                <p><a href="/">Jour</a></p>
            </li>
            <li>
                <p><a href="/">Semaine</a></p>
            </li>
            <li>
                <p><a type="date" href="/">Mois</a></p>
            </li>

>>>>>>> 3c8bc03dd2bf562502f24d9416713ef052bc3e22
        </ul>
    </li>
    <!-- -------------  FIN CHAMP DATE -------------- -->
    
    <!-- -------------  CHAMP PRIX C/D -------------- -->
    <li><a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/">Prix</a>
        <ul class="dropdown-menu prix">
            <li>
                <p><a href="/">Croissant</a></p>
            </li>
            <li>
                <p><a href="/">Decroisasnt</a></p>
            </li>
        </ul>
    </li>
    <!-- ------------- FIN CHAMP PRIX C/D ----------- -->

    <!-- ------------- CARTE DES REGIONS ------------ -->
    <li><a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="/">Carte de Region</a>
        <ul class="dropdown-menu map">
            <li>
                <p>
                    <script src="js/france-map.js"></script>
                    <script>
                        francefree();
                    </script>
                </p>
            </li>

        </ul>
    </li>
    <!-- ---------- FIN CARTE DES REGIONS ----------- -->

    <!-- ------------- CHAMP RECHERCHE  ------------- -->
    <li>
        <form action="" method="POST">

            <ul class="nav nav-pills">
                <p>
                    <li>
                        <label>Recherche</label>
                    </li>
                    <input type="text" name="recherche">
                    <input type="submit" value="ok">
            </ul>

        </form>
    </li>
    <!-- ------------- FIN CHAMP RECHERCHE ---------- -->

</ul>

<<<<<<< HEAD
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
=======
<!-- ------- HTML --- FIN BARRE DE RECHERCHE ---------- -->
>>>>>>> 3c8bc03dd2bf562502f24d9416713ef052bc3e22


<!-- ------------ SCRIPT PHP CHAMP DE RECHERCHE ----------------- -->
<?php

if (isset($_POST['recherche'])) { 

    $recherche = addslashes($_POST['recherche']);  

    //echo 'Vous avez recherché : ' . $recherche . '<br />';

    echo "<h5>". "Les résultats de recherche sont :" . "</h5>" . "<br/>" . "<br/>"; 
    
/* ********************************    REQUETE SQLAU SERVEUR      ********************************** */
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
    OR date_post LIKE '%". $recherche ."%'
    OR tel_annonce LIKE '%". $recherche ."%'  ORDER BY id DESC LIMIT 10"; 

/* *****************************   EXECUTION DE LA REQUETE SQL   ********************************* */
    $resultat = $db->query($requete) or die(print_r($db->errorInfo()));

    while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) { 

        echo<<<EOT
 <div class="container">
  <div class="row">
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"> 

	<div class="miniature2" style="background-image:url(uploads/$donnees[photo1])">
  		<div class="int2 ">
	  		<h4>$donnees[pseudo]  <span>$donnees[titre]</span>   $donnees[departement_id]</h4><p></p>
            <h4>$donnees[prix]€   </h4><p></p>
		</div>
  	</div>
background: 0 -222px url(../img/headerBckNb.png) no-repeat;
        <a href="index.php?action=annonce&id=$donnees[id]" class="ribbon-container"> 
    <img class="miniature" style="background-image:url(uploads/$donnees[photo1])"> 
    <span class="ribbon">Voir l'annonce</span> </a> </div>
  </div>
</div>
EOT;
    }
}
?>
<<<<<<< HEAD
>>>>>>> 3a8adf172d00cf2daafdde097ecfc9f5c399c5b7
=======
<!-- ------------ FIN SCRIPT PHP CHAMP DE RECHERCHE ----------------- -->
>>>>>>> 3c8bc03dd2bf562502f24d9416713ef052bc3e22
