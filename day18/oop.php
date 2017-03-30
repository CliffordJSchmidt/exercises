<?php

var_dump[car];

class car
{
    public $color = null;
    public $manufacturer = null;
    public $model = null;
    public $price = null;
    public $nr_of_wheels = 4;
    public $fuel_type = 'petrol';
    public $tire_type = null;
    public $owner = 'manufacturer';
    public $current_speed = 0;

    public function speed_up()
    {
        $this->current_speed += 10;
    }
    
    
    public function drive()
    {
        $this->current_speed -= 10;
    }

    public function get_stolen()
    {
        $this->owner =  $new_owner;
    }
    
    public function be_bought($new_owner)
    {
        $this->owner =  $new_owner;
    }
}

//no car was made yet

$new_car = new car();  //new car is created
$new_car -> manufacturer ='Skoda'; // it got it's manufacturers mark
$new_car ->model = 'Favorit'; // it got it's brand

$new_car -> price = 400000; // the car is given a price
$new_car -> price = 1000000; // the car is on sale
$new_car ->be_bought('Jan'); // I buy the car

$new_car -> speed_up(); // $new_car ->speed ==10
$new_car -> speed_up(); //$new_car ->speed ==20
$new_car -> speed_up(); //$new_car ->speed ==30 
$new_car -> speed_up(); // $new_car ->speed ==40

$new_car -> brake();//   $new_car ->
$new_car -> brake();
$new_car -> brake();
$new_car -> brake();

$new_car-> get_stolen();

$new_car -> nr_of_wheels = 0; // the wheels are chopped off