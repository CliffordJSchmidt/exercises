<?php 


/* oop1.php
Declare a class address

It will have these (non-static) protected properties, all initialized to null:

name
street
house_nr
city
country
postal_code
It will have one static protected property local_country initialized to null

Write a public static method setLocalCountry that would allow to set the value of the property local_country
*/


class Address{

    protected $name = 'null';
    protected $street = 'null';
    protected $house_nr = null;
    protected $city = 'null';
    protected $country = 'null';
    protected $postal_code = null;

    static protected $local_country = 'null';


      public static function localCountry($local_country){

        }



}


// test if the class Address exists
if(class_exists('Address')){
    echo 'Yes the Class "Address" exists' . '<br>';
} else{
    'class Address not working???';
}

// test if the method localCountry exists
if(method_exists('Address', 'localCountry')){
    echo 'Yes the Method "localCountry" exists' . '<br>';
} else{
    'not working';
}


//test .. create new object to see if values be inherited. 



?> 