<?php
try{
    
    
    
    
    
    
if ($_POST) {

    // INSERT INTO table (colonnes table) VALUES (?,?)
    $stmt = $db->prepare("INSERT INTO annonces (departement_id, cp_annonce, pseudo, email_annonce, tel_annonce, titre, texte, prix, photo1, photo2, photo3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bindValue(1, $_POST["departement"], PDO::PARAM_STR);
    $stmt->bindValue(2, $_POST["code_postal"], PDO::PARAM_STR);
    $stmt->bindValue(3, $_POST["pseudo"], PDO::PARAM_STR);
    $stmt->bindValue(4, $_POST["email"], PDO::PARAM_STR);
    $stmt->bindValue(5, $_POST["tel_annonce"], PDO::PARAM_STR);
    $stmt->bindValue(6, $_POST["titre"], PDO::PARAM_STR);
    $stmt->bindValue(7, $_POST["texte"], PDO::PARAM_STR);
    $stmt->bindValue(8, $_POST["prix"], PDO::PARAM_STR);
    $stmt->bindValue(9, $_FILES["photo1"]["name"], PDO::PARAM_STR);
    $stmt->bindValue(10, $_FILES["photo2"]["name"], PDO::PARAM_STR);
    $stmt->bindValue(11, $_FILES["photo3"]["name"], PDO::PARAM_STR);

    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $repertoire_upload = "C://xampp//htdocs//projetTeam//uploads//";
        $fichier_upload = $repertoire_upload . basename($_FILES["photo1"]["name"]);
        //echo $fichier_upload;
        if (move_uploaded_file($_FILES["photo1"]["tmp_name"], $fichier_upload)) {
//            echo "Votre image est envoyée";
        } else {
//            echo "Erreur...";
        }
        $fichier_upload = $repertoire_upload . basename($_FILES["photo2"]["name"]);
        //echo $fichier_upload;
        if (move_uploaded_file($_FILES["photo2"]["tmp_name"], $fichier_upload)) {
//            echo "Votre image est envoyée";
        } else {
//            echo "Erreur...";
        }
        $fichier_upload = $repertoire_upload . basename($_FILES["photo3"]["name"]);
        //echo $fichier_upload;
        if (move_uploaded_file($_FILES["photo3"]["tmp_name"], $fichier_upload)) {
//            echo "Votre image est envoyée";
        } else {
//            echo "Erreur...";
        }
    }
} catch(PDOException $ex) {
    echo $ex->getMessage();
}
?>

<!DOCTYPE html>
<html lang="Fr">

<!--
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="biblio_perso/css/bootstrap-3.3.5/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">


        <title>Déposer votre annonce</title>

    </head>
-->

    <body>
           
<form class="form-horizontal" method="POST" enctype="multipart/form-data">

 <div class="form-group required">
    <label class="col-sm-2 control-label">Département</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputdpt3" placeholder="Département" name="departement" required>
    </div>
  </div>
  <div class="form-group required">
    <label class="col-sm-2 control-label">Code Postal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputFirstName3" name="code_postal" placeholder="Code Postal" required>
    </div>
  </div>

    <div class="form-group required">
    <label class="col-sm-2 control-label">Pseudo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPseudo3" placeholder="Votre pseudo" name="pseudo" required>
    </div>
  </div>

    <div class="form-group required">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Votre adresse mail" name="email" required>
    </div>
  </div>

    <div class="form-group required">
    <label class="col-sm-2 control-label">Téléphone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTel3" placeholder="Vous êtes joignable au" name="tel_annonce" required>
    </div>
  </div>

    <div class="form-group required">
    <label class="col-sm-2 control-label">Titre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTitre3" name="titre" placeholder="Titre de l'annonce" required>
    </div>
    </div>

    <div class="form-group required">
    <label class="col-sm-2 control-label">Texte</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTexte3" placeholder="tapez votre annonce" name="texte" required>
    </div>
  </div>

    <div class="form-group required">
    <label class="col-sm-2 control-label">Prix</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrix3" placeholder="Entrez votre prix" name="prix" required>
    </div>
  </div>

    <div class="form-group required">
    <label class="col-sm-2 control-label">Photo 1</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputImage1" name="photo1">
    </div>
  </div>

    <div class="form-group required">
    <label class="col-sm-2 control-label">Photo 2</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputImage2" name="photo2">
    </div>
  </div>

    <div class="form-group required">
    <label class="col-sm-2 control-label">Photo 3</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputImage3" name="photo3">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="depot" class="btn btn-primary">Déposer votre annonce</button>
    </div>
  </div>
</form>

    </body>

</html>