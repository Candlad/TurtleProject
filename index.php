<?php
/**
 * Created by PhpStorm.
 * User: Martin Patez
 * Date: 09/04/2018
 * Time: 14:56
 */
echo "<h1>The turtle project</h1>";


    $message = "<ul>";

for ($nouille = -17827; $nouille <= 14568; $nouille += 7 ) {
    if ($nouille % 27 == 0) {

     $message .= "<li>";
     $message .= $nouille;
     $message .= "</li>";
        }
    }

$message .= "</ul>";

echo $message;
