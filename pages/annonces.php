<?php

foreach ($db->query("SELECT * FROM annonces ORDER BY id DESC LIMIT 10") as $annonce) {

    echo <<<EOT
 <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    
	<div class="miniature" style="background-image:url(uploads/$annonce[photo1])">
  		<div class="int ">
	  		<h4>$annonce[titre]</h4>
	  		<p>$annonce[prix]€</p>
		</div>
  	</div>

        <a href="index.php?action=annonce&id=$annonce[id]" class="ribbon-container"> 
    <img class="miniature" style="background-image:url(uploads/$annonce[photo1])"> 
    <span class="ribbon">Voir l'annonce</span> </a> </div>
  </div>
</div>
EOT;
}

?>