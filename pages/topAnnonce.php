<fieldset>
    <legend>TOP ANNONCE</legend>
    
  <?php

foreach ($db->query("SELECT * FROM annonces ORDER BY id DESC LIMIT 10") as $annonce) {

echo <<<EOT
    <button  class="btn btn-red ribbon-b int3">$annonce[titre]     $annonce[date_post]</button>
	<div class="miniature int" style="background-image:url(uploads/$annonce[photo1])">

  	</div>
    
        <a href="index.php?action=annonce&id=$annonce[id]" class="ribbon-container-t"> 
    <img class="miniature" style="background-image:url(uploads/$annonce[photo1])"> 
    <span class="ribbon-t">Voir l'annonce</span> </a>
EOT;
}

?>


    
</fieldset>
