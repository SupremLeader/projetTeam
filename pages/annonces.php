<?php

foreach ($db->query("SELECT * FROM annonces ORDER BY id DESC LIMIT 10") as $annonce) {

    echo <<<EOT
 <div class="container">
  <div class="row">
  <button  class="btn btn-primary ribbon-b int3">$annonce[titre]     $annonce[date_post]</button>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    
	<div class="miniature int" style="background-image:url(uploads/$annonce[photo1])">
  	</div>

        <a href="index.php?action=annonce&id=$annonce[id]" class="ribbon-container"> 
    <img class="miniature" style="background-image:url(uploads/$annonce[photo1])"> 
    <span class="ribbon">Voir l'annonce</span> </a> </div>
  </div>
</div>
EOT;
}

?>