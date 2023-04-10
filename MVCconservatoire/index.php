<?php
session_start();
include("Model/monPdo.php");
include "View/header.php";

if (empty($_GET["uc"])){
    $uc="accueil";
}else{
    $uc=$_GET["uc"];
}

switch($uc){
    case "accueil":
        include "View/accueil.php";
        break;
    case "inscription":
        include "View/formInscription.php";
        break;
    case "conservatoire":
        include("Controler/controlerConservatoire.php");
        break;
}


include "view/footer.php";

?>