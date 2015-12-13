<fieldset>
    <legend>TOP ANNONCE</legend>
    
  <?php

foreach ($db->query("SELECT * FROM annonces ORDER BY id DESC LIMIT 10") as $annonce) {

echo <<<EOT
    
	<div class="miniature" style="background-image:url(uploads/$annonce[photo1])">
  		<div class="int ">
	  		<h4 class="t">$annonce[titre]</h4>
	  		<p>$annonce[prix]€</p>
		</div>
  	</div>
    
        <a href="index.php?action=annonce&id=$annonce[id]" class="ribbon-container-t"> 
    <img class="miniature" style="background-image:url(uploads/$annonce[photo1])"> 
    <span class="ribbon-t">Voir l'annonce</span> </a>
EOT;
}

?>


    
</fieldset>
