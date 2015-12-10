<<<<<<< HEAD
=======

<?php
require_once('bdd/connexionBDD.php');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$query  = parse_url($actual_link);
if (isset(parse_url($actual_link)["query"])) {
  $query  = parse_url($actual_link)["query"];
  parse_str($query, $params);
} else {
    $params["action"]="annonces";
}



// if (isset($_GET["action"])) {
//  $action = $_GET["action"];
// } else {
//  $action = "annonces";
// }

// switch ($action) {
//  case 'aide':
//  $main = "pages/aide.php";
//  break;
//  case 'post_formulaire':
//  $main = "bdd/post_formulaire.php";
//  break;
//  case 'main':
//  $main = "pages/main.php";
//  break;
//  case 'annonces':
//  $main = "pages/annonces.php";
//  break;
//  case 'depot':
//  $main = "pages/depot.php";
//  break;
//  default:
//  $main = "pages/annonces.php";
//  break;
// }
>>>>>>> 44dfa5838f168953ebf1355c5a5cb63dffc9e9c7

           <?php

<<<<<<< HEAD
           require_once('bdd/connexionBDD.php');

=======
<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/annonces.css">


    <title>Projet</title>

</head>
>>>>>>> 44dfa5838f168953ebf1355c5a5cb63dffc9e9c7


<<<<<<< HEAD
           if (isset($_GET["action"])) {
               $action = $_GET["action"];
           } else {
               $action = "main";
           }

           switch ($action) {
               case 'aide':
                   $main = "pages/aide.php";
                   break;
               case 'post_formulaire':
                   $main = "bdd/post_formulaire.php";
                   break;
               case 'main':
                   $main = "pages/main.php";
                   break;
               default:
                   $main = "pages/aide.php";
                   break;
           }

           ?>

           <!DOCTYPE html>
<html lang="Fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
=======
    <header class="col-sm-12"> <!-- HEADER -->

        <div class="logo-header"> <!-- LOGO DU SITE -->
            <a href="/"><h1>P & P<img class="logo-site" src="img/sale_tag_256.png"></h1></a>
        </div>
        <a><p>Site de vente de Particulier à Particulier</p></a>

        <nav class="nav cent-nav"> <!-- MENU NAV -->

            <ul class="nav nav-pills">

                <li><a href="/ProjetTeam/index.php?action=annonces">Accueil</a></li>
                <li><a href="/ProjetTeam/index.php?action=depot">Depot d'annonce</a></li>
                <li><a href="/ProjetTeam/index.php?action=post_formulaire">Inscription</a></li>
                <li><a href="/ProjetTeam/index.php?action=aide">Aide</a></li>

                <?php
                include("pages/login.php");
                ?>
>>>>>>> 44dfa5838f168953ebf1355c5a5cb63dffc9e9c7

            </ul>
        </nav> <!-- END MENU NAV -->

    </header> <!-- END HEADER -->

    <nav class="nav cent-nav"> <!-- MENU NAV RECHERCHE -->

<<<<<<< HEAD
    <body>

        <header class="col-sm-12"> <!-- HEADER -->

            <div class="logo-header"> <!-- LOGO DU SITE -->
                <a href="/"><h1>P & P<img class="logo-site" src="img/sale_tag_256.png"></h1></a>
            </div>
            <a><p>Site de vente de Particulier à Particulier</p></a>

            <nav class="nav cent-nav"> <!-- MENU NAV -->

                <ul class="nav nav-pills">

                    <li><a href="/ProjetTeam/index.php?action=index">Accueil</a></li>
                    <li><a>Depot d'annonce</a></li>
                    <li><a href="/ProjetTeam/index.php?action=post_formulaire">Inscription</a></li>
                    <li><a href="/ProjetTeam/index.php?action=aide">Aide</a></li>


                    <li><form method="post"> <!-- LOGIN -->
                        <li> 
                            <input type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="connexion"> 
                            <ul class="dropdown-menu">
                                <li><p><label>E-mail</label></p></li>
                                <li><p><input type="eamil" name="email"></p></li>
                                <li><p><label>Mot de passe</label></p></li>
                                <li><p><input type="password" id="password" name="password"></p></li>
                                <li><p><input type="submit" name="login" value="login"></p></li>    
                            </ul>
                        </li>
                        </form> 
                    </li><!-- END LOGIN -->
                </ul>
            </nav> <!-- END MENU NAV -->

        </header> <!-- END HEADER -->

        <nav class="nav cent-nav"> <!-- MENU NAV RECHERCHE -->

            <ul class="nav nav-pills">

                <li><a href="/">Date</a></li>
                <li><a href="/">Prix</a></li>
                <li><a href="/">Departement</a></li>

                <li><form method="post">
                    <li> 
                        <ul class="nav nav-pills">
                            <p><li><label>Recherche</label></li>
                                <li><input type="search" id="recherche" name="recherche"></li>
                                <li><input type="submit" name="recherche" value="ok"></li></p>    
                        </ul>
                    </li>
                    </form> 
                </li>
            </ul>
        </nav> <!-- END MENU NAV RECHERCHE -->

        <aside class="col-sm-2"> <!-- TOP ANNONCE -->
            <fieldset>
                <legend>Top Annonce</legend>
            </fieldset>

        </aside> <!-- END TOP ANNONCE -->

        <main class="col-sm-9">

            <?php
            include($main);
            ?>

        </main>
        <footer class="col-sm-12"> <!-- FOOTER MENU -->
            <section>
                <h1>Quentin</h1>
            </section>
        </footer> <!-- END FOOTER MENU -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script>
        </script>

    </body>
=======
        <ul class="nav nav-pills">

            <li><a href="/">Date</a></li>
            <li><a href="/">Prix</a></li>
            <li><a href="/">Departement</a></li>

            <li><form method="post">
                <li> 
                    <ul class="nav nav-pills">
                        <p><li><label>Recherche</label></li>
                            <li><input type="search" id="recherche" name="recherche"></li>
                            <li><input type="submit" name="recherche" value="ok"></li></p>    
                        </ul>
                    </li>
                </form> 
            </li>
        </ul>
    </nav> <!-- END MENU NAV RECHERCHE -->

    <aside class="col-sm-2"> <!-- TOP ANNONCE -->
        <fieldset>
            <legend>Top Annonce</legend>
        </fieldset>

    </aside> <!-- END TOP ANNONCE -->

    <main class="col-sm-9">

        <?php
        include("pages/$params[action].php");
        ?>

    </main>
    <footer class="col-sm-12"> <!-- FOOTER MENU -->
        <section>
            <h1>Quentin</h1>
        </section>
    </footer> <!-- END FOOTER MENU -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
    </script>

</body>
>>>>>>> 44dfa5838f168953ebf1355c5a5cb63dffc9e9c7

</html>
