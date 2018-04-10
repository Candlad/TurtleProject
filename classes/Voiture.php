<?php
/**
 * Created by PhpStorm.
 * User: Martin Patez
 * Date: 10/04/2018
 * Time: 09:30
 */

class Voiture
{
    public $couleur;
    public $masse;
    public $marque;
    public $puissance;
    public $vitesse;

    public function __construct($couleur, $marque, $masse, $puissance )
    {
        $this -> couleur = $couleur;
        $this -> marque = $marque;
        $this -> masse = $masse;
        $this -> puissance = $puissance;
    }





    public function  demarrer()
    {
        $message = "la voiture démarre";
        return $message;
    }


}