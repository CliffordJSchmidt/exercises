<?php 


/*
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



class Address
{   
    protected $name = null;
    protected $street = null;
    protected $house_nr = null;
    protected $city = null;
    protected $country = null;
    protected $postal_code = null;

    static protected $local_country = null;

    protected static function nukeCountry($name)
    {
      
    }
  
  	public function nukeMe()
    {
      static::nukeCountry($this->name);
    }
  
    public static function setLocalCountry($local_country)
  {
   static::$local_country = $local_country;
  }
 
}

Address::nukeCountry(); // error
$czechia = new Address();
$czechia->nukeMe(); // ok


Address::setLocalCountry('USA');