<!-- ------- HTML --------- BARRE DE RECHERCHE -------- -->

<ul class="nav nav2 nav-pills">

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

<!-- ------- HTML --- FIN BARRE DE RECHERCHE ---------- -->


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
<!-- ------------ FIN SCRIPT PHP CHAMP DE RECHERCHE ----------------- -->