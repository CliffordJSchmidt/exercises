<?php

function divide ($number_1, $number_2, & $remainder)
{
    $remainder =  $number_1 % $number_2;

    return $number_1 / $number_2;
    
}

$result_of_division = divide(3, 2, $my_remainder);

$result_of_division; // 1.5
$my_remainder; //1


$array = (

);

sort($array);

$copy=$array;

$reference_of_array = & $arry; //used for saving memory