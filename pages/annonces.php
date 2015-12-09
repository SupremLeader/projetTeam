
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8";
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/annonces.css">
</head>
<body>
<!--     <div class="miniature" style="background-image:url(../uploads/jambon2.jpg)">
  	<div class="int">
	  <h1>Magnifique jambon</h1>
	  <p>80€</p>
	  	  <p><a class="btn btn-primary btn-lg" href="#" role="button">Voir l'annonce</a></p>
	</div>
  </div> -->
  <?php

foreach ($db->query("SELECT * FROM annonces ORDER BY id DESC LIMIT 10") as $annonce) {

echo <<<EOT
	<div class="miniature" style="background-image:url(uploads/$annonce[photo1])">
  		<div class="int">
	  		<h1>$annonce[titre]</h1>
	  		<p>$annonce[prix]€</p>
	  	  	<p><a class="btn btn-primary btn-lg" href="index.php?action=annonce&id=$annonce[id]" role="button">Voir l'annonce</a></p>
		</div>
  	</div>
EOT;
}

?>

</body>
</html>