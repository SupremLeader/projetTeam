<fieldset>
    <legend>Top Annonce</legend>
    
    <?php
//require_once('../bdd/connexionBDD.php');

$stmt= $db->prepare ("SELECT * FROM annonces where id = ?");
$stmt->execute(array($_GET["id"]));
while($value=$stmt->fetch()){
    $photo1 = $value["photo1"];
    $photo2 = $value["photo2"];
    $photo3 = $value["photo3"];
}
?>


    
</fieldset>
