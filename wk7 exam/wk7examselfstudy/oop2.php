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


/* oop2.php 
Continuing with the class address, write a __construct method that will take one argument - an array like this:

array(
    'name' => 'Eberhard Wellhausen',
    'street' => 'Schulstrasse',
    'house_nr' => 4,
    'city' => 'Bad Oyenhausen',
    'country' => 'de',
    'postal_code' => '32547'
);
The __construct method should set the values of the appropriate properties.

The array may have any, all or none of the keys above.

Only the values present in the array should be used to set the properties. The rest of the properties should be left alone.

Create 4 objects of the class address with the following data:
<?php
array(
    'street' => 'Schorbachstrasse',
    'city' => 'Butzbach',
    'postal_code' => '35510'
    'country' => 'de'
);

array(
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
);

array(
    'name' => 'Czech Post',
    'street' => 'Prujezdna',
    'house_nr' => 9,
    'city' => 'Praha',
    'country' => 'cz',
    'postal_code' => '22599'
);

array(
    'street' => 'Kordačova',
    'house_nr' => 2912,
    'city' => 'Kladno',
    'country' => 'cz',
    'postal_code' => '27204'
);
*/


class Address{

    protected $name = 'null';
    protected $street = 'null';
    protected $house_nr = null;
    protected $city = 'null';
    protected $country = 'null';
    protected $postal_code = null;

    static protected $local_country = 'null';




        public function localCountry($local_country){
            static::local_country($this->name);

        }


        function __constructAddress(){
            echo '<li>' . $name . '</li></br>';
            echo '<li>' . $street . '</li></br>';
            echo '<li>' . $house_nr . '</li></br>';
            echo '<li>' . $city . '</li></br>';
            echo '<li>' . $country . '</li></br>';
            echo '<li>' . $postal_code . '</li></br>';
            echo '<li>' . $name . '</li></br>';
            echo '<li>' . localCountry() . '</li></br>';

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


