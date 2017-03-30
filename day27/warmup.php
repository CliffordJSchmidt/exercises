<?php

//1
$name = 'James';


//2
$name .=' Bond';

//or

$name = $name . ' Bond';


//3

$bond_info = array(
            'first_name' => 'James',
            'last_name' => 'Bond',
            'gun' => 'Walther PPK',
            'car' => 'Aston Martin',
            'enemy' => 'Stavro Blofeld',
            'relationship_status' => 'widower',
            'cases' => 24
);

//4

echo 'The name is '.$bond_info['last_name'].".".$bond_info['first_name'].' '.$bond_info['last_name'].'.';


//5

echo'One day when I was driving my' .bond_info['car']. 'in the Alps ' .bond_info['enemy']. ' came along and made me a '.bond_info['widower'].'. If only I had my ' .bond_info['gun'].' with me!';

// can also have text sentence "  text text text {$bond_info['car']} text text text."

//6 
$bond_info['last_case']='Spectre';


//7

class bondCase
{
    //16
    protected static $cases_solved =0;
    protected static $girls_met = 0;      


        
    //19

    public static function getAvgGirlsPerCase(){
            return static::$girls_met/static::$cases_solved;
        }




    protected  $name = null;
    protected  $year = null;
    protected  $enemy = null;

    //10 Add a new property to the class
    protected $girls = array();

    //9 Write a __construct method that will take one argument $year and set it as the value of it's property year

    public function __construct($year)
    {
        $this->year = $year;
        
        //17
        static::$cases_solved++;
    }


    //11 Write a method addGirl($name) that would add a new item into the property girls. The property girls will be a numerically indexed array.

    public function addGirl($name)
    {
            $this -> girls[] =($name);

        //18
            static::$cases_solved++;

    }

            //8  get and set methods

        public function getName()
        {

            return $this->name;
        }

        public function setName()
        {

            $this->name = $name;
        }



        public function getYear()
        {

            return $this->year;
        }

        public function setYear()
        {

            $this->year = $year;
        }
        


        public function getEnemy()
        {

            return $this->enemy;
        }

        public function setEnemy()
        {

            $this->enemy = $enemy;
        }







}

//12
$spectre = new bondCase(2015);
$spectre ->setName('Spectre');
$spectre ->setEnemy('Ernest Stavro Blofeld');

//13
$spectre -> addGirl('Estrella');
$spectre -> addGirl('Lucia Sciarra');
$spectre -> addGirl('Madeleine Swann');

//14
$casino = new bondCase(2006);
$casino -> setName('Casion Royale');
$casino -> setEnemy('Le Chiffre');

//15
$casino -> addGirl('Vesper Lynd');
$casino -> addGirl('Solange Dimitrios');



//20 

echo 'On average Bond has met '.bondCase::getAvgGirlsPerCase().' girls per case.';