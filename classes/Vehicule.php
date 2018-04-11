<?php
/**
 * Created by PhpStorm.
 * User: Martin Patez
 * Date: 10/04/2018
 * Time: 12:12
 */

class Vehicule
{
    public $masse;
    public $vitesse;

    public function energieCinetique()
    {

        return ($this->masse / 2) * $this->vitesse ** 2;

    }

}