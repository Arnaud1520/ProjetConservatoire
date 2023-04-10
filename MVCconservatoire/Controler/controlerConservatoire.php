<?php

$action = $_GET["action"];

switch($action){
    case "liste";
        $lesProduits = Produit::afficherTous();
        include("View/listeEleves.php");
        break;
}

?>