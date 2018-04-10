<?php
include "./classes/Voiture.php";

$voiture1 = new Voiture("Jaune", "Ford",5000000,58528569222);

//$voiture1 -> couleur = "Gruik";
//$voiture1 -> marque = "Washwuntai";
//$voiture1 -> masse = 900;
//$voiture1 -> puissance = 150000;


 var_dump($voiture1);

echo $voiture1 -> demarrer();