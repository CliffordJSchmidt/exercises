<?php

/*Write PHP code to declare a class product. It should describe a product in a generic e-shop.
Design the class yourself to include:

At least 3 properties, at least one of them protected
One set method to set the value of the protected property
One get method to retrieve the value of the protected property
One magical method that would return one of the product's properties when it is being cast to string
One constant named 'VERSION with the value 1.0
One static method getVersion that would return the value of the constant.
Write a short comment to each of the methods.*/


class product{
    // 3 properties 
    public $product_size;
    protected $product_color;
    protected $product_price;
    // version 
    const VERSION = '1.0';
    public function __set($product_name, $value){
        return $this->product_name = $value;
    }
    public function __get($product_color){
        return $this->product_color = $product_color;
    }
    public function __tostring()
    {
        return $this->product_color;
    }
    public static function getVersion(){
        return self::VERSION;
    }
};

$my_product = new product();
$my_product->product_size = "11";
$my_product->product::getVersion();
var_dump($my_product);



?>