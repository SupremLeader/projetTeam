<?php
//require_once('../bdd/connexionBDD.php');

$stmt= $db->prepare("SELECT * FROM annonces where id = ?");
$stmt->execute(array($params["id"]));
while($value=$stmt->fetch()){
    $photo1 = $value["photo1"];
    $photo2 = $value["photo2"];
    $photo3 = $value["photo3"];
    echo "<section>" . "<legend>" . $value ["titre"] . "</legend>" . "</section>";

}
?>

<!-- SLIDER -->
<section class="sect-ann container">
    <div class="container">

        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">

                                        <!-- PHOTO SLIDER PHP/BDD -->
                                        <?php

                                        echo    "<img class='img-slid' src='uploads/" . $photo1 . "'/>";

                                        ?>
                                        <!-- END PHOTO SLIDER PHP/BDD -->
                                    </div>
                                    <div class="item" data-slide-number="1">
                                        <!-- PHOTO SLIDER PHP/BDD -->
                                        <?php

                                        echo    "<img class='img-slid' src='uploads/" . $photo2 . "'/>";

                                        ?>
                                        <!-- END PHOTO SLIDER PHP/BDD --></div>

                                    <div class="item" data-slide-number="2">
                                        <!-- PHOTO SLIDER PHP/BDD -->
                                        <?php

                                        echo    "<img class='img-slid' src='uploads/" . $photo3 . "'/>";

                                        ?>
                                        <!-- END PHOTO SLIDER PHP/BDD --></div>

                                </div><!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                </a>                                
                            </div>
                        </div>

                        <!--                        <div class="col-sm-4" id="carousel-text"></div>-->

                        <div id="slide-content" style="display: none;">
                            <div id="slide-content-0">
                                <h2>Slider One</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-1">
                                <h2>Slider Two</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>

                            <div id="slide-content-2">
                                <h2>Slider Three</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>


                            <div id="slide-content-3">
                                <h2>Slider Four</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--/Slider-->

            <div class="row hidden-sm" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-0"><!-- PHOTO SLIDER PHP/BDD -->
                            <?php

                            // $stmt = $db->query("SELECT photo1 FROM annonces");
                            // $value = $stmt->fetch();
                            echo    "<img class='img-slid' src='uploads/" . $photo1 . "'/>";

                            ?>
                            <!-- END PHOTO SLIDER PHP/BDD --></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-1"><!-- PHOTO SLIDER PHP/BDD -->
                            <?php

                            // $stmt = $db->query("SELECT photo2 FROM annonces");
                            // $value = $stmt->fetch();
                            echo    "<img class='img-slid' src='uploads/" . $photo2 . "'/>";

                            ?>
                            <!-- END PHOTO SLIDER PHP/BDD --></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-2"><!-- PHOTO SLIDER PHP/BDD -->
                            <?php

                            // $stmt = $db->query("SELECT photo3 FROM annonces");
                            // $value = $stmt->fetch();
                            echo    "<img class='img-slid' src='uploads/" . $photo3 . "'/>";

                            ?>
                            <!-- END PHOTO SLIDER PHP/BDD --></a>
                    </li>

                </ul>                 
            </div>
        </div>
    </div>
</section><!-- END SLIDER -->



<!-- DESCRIPT ANNONCE --><section class="col-sm-8" >

        <article>
            <fieldset>
                <legend id="img_info_ann"> Informations sur l'annonce </legend>
                <?php

                $stmt= $db->prepare("SELECT * FROM annonces WHERE id = ?");
                $stmt->execute(array($params["id"]));
                while($value=$stmt->fetch()){
                    echo "<h3>" . "Prix : " . "<span>" . $value["prix"] . "$" . "</span>" . "</h3>";
                    echo "<h3>" . "E-mail : " . "<span>" . $value["email_annonce"] . "</span>" . "</h3>";
                    echo "<h3>" . "Télèphone : " . "<span>" . $value["tel_annonce"] . "</span>" . "</h3>";
                    echo "<h3>" . "Code Postal : " . "<span>" . $value["cp_annonce"] . "</span>" . "</h3>";
                    echo "<h3>" . "Description : " . "<span>" .  $value["texte"] . "</span>" . "</h5>";
                }


                ?>
            </fieldset> 

        </article>

</section><!-- END DESCRIPT ANNONCE -->


<!-- ACHETEUR CONTACT --><section class="col-sm-4" >

        <article>
            <fieldset>
                <legend> Contacter l'Annonceur </legend>     
           
           <form>
               <fieldset>
                  <ul class="nav">
                     <p><li><label>Votre E-mail</label>
                      <input type="email"><br/></li>
                      <li><label>Votre Nom</label>
                      <input type="text"><br/></li>
                      <li><label>Votre Prenom</label>
                      <input type="text"><br/></li>
                      <li><textarea></textarea></li></p>
                   </ul>
               </fieldset>
               
           </form>
                       
                       <!-- submit -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="valider"></label>
            <div class="col-md-4">
                <p><input type="submit" id="contacter" name="contacter" value="Contacter" class="btn btn-success"></p>
            </div>
        </div>
            </fieldset> 

        </article>

</section><!-- END ACHETEUR CONTACT -->