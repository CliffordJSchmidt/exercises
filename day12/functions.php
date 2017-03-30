<?php
    function get_current_year()
    {
        return date('Y');
    }



    function print_current_year()
    {
        echo date('Y');
    }



    

 /*
    function name() {
        echo 'CJ';
    }    

    function surname() {
        echo 'Schmidt';
    }

    function yob() {
        echo '1980';
    }

    function height() {
        echo '5ft11in';
    }
*/

    $name = "CJ" ;
    $surname = 'Schmidt' ;
    $yob = '1980';
    $height = '5ft11in'; 
    

    /* running a constant */
    define('MY_OS', 'Windows 10'); 

/*
    $owns_a_car = false;

    $vehicle = $owns_a_car ? 'car' : 'bicycle';

    function print_is_true($owns_a_car)
*/


    function print_is_even($number)
    {   
        $result = $number % 2 == 0? 'even' : 'odd';
        echo $result;
    }

    $number_to_test = 14;

?>
    