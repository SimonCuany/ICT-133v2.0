<?php

$value  = '20';
$step = '3';
$i ='0';
while ($i < 10){
    if ($value >= 30){
        echo ("Le nombre vaut : ". $value);?><br><?php
    }
    else{
        echo ("Nombre trop petit");?><br><?php
    }
    $value += $step;

    $i++;
}

?>

