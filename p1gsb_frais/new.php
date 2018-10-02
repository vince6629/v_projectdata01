<?php

require_once 'includes/fct.inc.php';
require_once 'includes/class.pdogsb.inc.php';


session_start();

$estConnecte = estConnecte();




$perso = new Personnage;
$perso->gagnerExperience();   // On gagne de l'expérience.
$perso->afficherExperience(); // On affiche la nouvelle valeur de l'attribut.

//&& $_SESSION['idVisiteur']='777'

if ($_SESSION['idVisiteur']=='777'){
    echo 'youpi';
}

if (estConnecte() && $_SESSION['idVisiteur']=='777') {
    
echo 'connecte';
echo 'c est parti !!! ';



?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title> 
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./styles/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="./styles/style.css" rel="stylesheet">
    </head>
<div id="accueil">
    <h2>
        INTERFACE <small> - COMPTE : 
            <?php 
            echo 'ADMINISTRATION';
            ?></small>
    </h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span>
                    Navigation
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a href="newmenu.php?a=1&b=1"
                           class="btn btn-success btn-lg" role="button">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <br>Choix 1</a>
                        <a href="newmenu.php?a=2&b=2"
                           class="btn btn-primary btn-lg" role="button">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <br>Choix 2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
<?php
}
else
{
    echo 'oups';
}
?>

