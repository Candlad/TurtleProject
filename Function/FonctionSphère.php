<?php


function VolumeSphere ($rayon)

{
    $volume = $rayon * $rayon * $rayon * 3.14 * (1/3);
    return $volume ; }

  $volume = VolumeSphere(4);

echo " $volume";

