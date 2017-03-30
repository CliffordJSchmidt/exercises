<?php


class Animal{

    public function sleep(){
        echo 'falls asleep';
    }


}




class Cat extends Animal{

    public function sleep(){
        echo 'purrs';

        parrent:: sleep();  //prints 'Falls asleep'  calls method from parent 
        // has to be written within child's class
    }

}

$oliver = new cat();
$oliver -> sleep();




// trait    can provide class members to classes that use them
            // can not make objects from a trait
trait myBehavior{
    
}


