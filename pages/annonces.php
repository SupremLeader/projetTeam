
<!DOCTYPE html>
  <?php

foreach ($db->query("SELECT * FROM annonces ORDER BY id DESC LIMIT 10") as $annonce) {

echo <<<EOT
	<div class="miniature" style="background-image:url(uploads/$annonce[photo1])">
  		<div class="int">
	  		<h3>$annonce[titre]</h3>
	  		<p>$annonce[prix]€</p>
	  	  	<p><a class="btn btn-primary btn-lg" href="index.php?action=annonce&id=$annonce[id]" role="button">Voir l'annonce</a></p>
		</div>
  	</div>
EOT;
}

?>
