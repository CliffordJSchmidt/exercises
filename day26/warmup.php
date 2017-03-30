<?php

//1
$avariable = 12.6666;

//2
$country_names = array(
        'cz' => 'Czechia',
        'de' => 'Germany',
        'fr' => 'France'
);


//country codes
//https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2](ISO-3166-1


//3

$this_country = $country_names['cz'];



//4

$country_gdp = array(
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
);



//5

$money = 123456789000000;
var_dump ($money); 

//6

echo 'The amount is '.($money).' USD<br>';


//7
echo 'The amount is '.($money/1000).' thousand USD<br>';


//7
echo 'The amount is '.($money/1000000).' million USD<br>';

//8
echo 'The amount is '.($money/1000000000000).' billion USD<br>';

//9

echo 'The amount is close to '.round($money / 1000000000000).' trillion USD<br>';

//10

echo 'The amount is close to '.round($money / 1000000000).' billion USD<br>';

//11
echo 'The amount is above '.floor($money / 1000000000).' billion USD<br>';

//12
echo 'The amount is under '.ceil($money / 1000000000).' billion USD<br>';

//13

echo'<ul>';              // $array as $key => $value
    foreach($country_names as $country_code=> $country_name)
    {
    echo'<li>Nominal GDP value of '.$country_name.' is $ '.($country_gdp[$country_code]/1000000000).'</li>';
    }
echo'</ul>';

//14

//  class country
//  {
 

//  }


//15

/*
    class country
    {
        protected $name = null;
        protected $gdp = null;
    }
*/


//16 and 17   
class country   // a class is the general description with a list of methods(ie the functions)
{
    protected $name = null;
    protected $gdp = null;

    public function __construct($name, $gdp)
    {
        $this->name = $name;
        $this->gdp = $gdp;
    }
    //17
    public function getName()
    {
        return $this->name;
    }
    //18
    public function getGdp()
    {
        return round($this->gdp/1000000000);
    }
}


//19

$countries = array();


//20

            // $array as $key => $value
    foreach($country_names as $country_code=> $country_name)
    {
        //$country is an array of objects,   new country is the object
    $country= new country($country_name, $country_gdp[$country_code]);

    //21
    $countries[] = $country;
    }


var_dump($countries);

//22

foreach($countries as $country)
{
    echo '<li>Nominal GDP value of '. $country->getName() .' is $ '.$country->getGdp().' billion</li>';
}

/*
funtion vdump($variable)
{
    echo n12br(var_export($variable, true));

};

*/

?>