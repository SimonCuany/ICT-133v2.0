<?php

$value  = '20';
$step = '3';

for ($i = 0 ; $i <10 ; $i++){
    if ($value >= 30){
        echo ("Le nombre vaut : ". $value);?><br><?php
    }
    else{
        echo ("Nombre trop petit");?><br><?php
    }
    $value += $step;
}

?>


