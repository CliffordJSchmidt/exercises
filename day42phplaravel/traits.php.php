<?php

// trait    can provide class members to classes that use them
            // can not make objects from a trait
trait myBehavior{
    
}



class animal{

    protected $hungry = true;

        public function eat(){

            $this->hungry = false;
    }


}



class dog extends animal
{
    use domesticated, understandscommands;
}




class wolf extends animal{
    
}

trait domesticated{

        public $owners_mood = 'unhappy';


        public function beFed(){

            $this->hungry = false;
            $this->owners_mood = 'happy';
    }

}

class baby
{
    protected $hungry = true; // trait expects it
    use domesticated;
}

class soldier
{
    use understandsCommands;
}

trait understandsCommands{

    public function fetch(){

    }

    public function sit(){

    }
}



$ben = new dog();
$ben ->eat();
$ben ->beFed();


$fang = new wolf();
$fang ->eat();

var_dump ($ben);
var_dump ($fang);
