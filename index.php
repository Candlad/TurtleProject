<?php


include "./classes/Vehicule.php";
include "./classes/Voiture.php";
include "./classes/Tuning.php";


$voiture1 = new Tuning("Jaune", "Ford",5000000,58528569222);

$voiture1 -> watt = 2000;
$voiture1 -> jackyCoeff = 0.5;

 var_dump($voiture1);

echo $voiture1 -> demarrer();

$voiture1 -> vitesse = 50;

echo "<p>L'EC de la voiture est " . $voiture1 -> energieCinetique() . "</p>";