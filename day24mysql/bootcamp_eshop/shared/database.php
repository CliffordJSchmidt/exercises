<?php
class Database
{
    protected $db; //property of the class, can be used to connect to this database function
    public function __construct() //construct automatically happens when opject gets created
    {
        
        $this -> db = new PDO('mysql: host=localhost; dbname=bootcamp_eshop; charset=utf8;', 'root', '');

        $this -> db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // this line is only for development, remove for production 

        /* var_dump used to see if anything is returned
        var_dump($db);
        */


        /* these lines of codes are used to insert information into a database    PDO.. use for stmt insert... (do not use variables in the insert statment) */


    }

    public function insertproduct($name, $price, $size, $color) 
    {
        $stmt = $this->db->prepare('INSERT INTO products (name, price, size, color) VALUES(?,?,?,?)');
        $stmt ->execute([$name, $price, $size, $color]); // [brackets] creates an array to be used by execute
        return $this -> db ->lastInsertId();
    }


    public function getproducts()
    {  
        $stmt= $this -> db->prepare('SELECT id, name, price, size, color FROM products');
        $stmt ->execute();
        return $stmt -> fetchALL (); // makes the result of execute available to be used for php variables when function is used 

    }


    public function getproduct($id)
    {
        $stmt= $this -> db->prepare('SELECT id, name, price, size, color FROM products WHERE id= ?');
        $stmt ->execute([$id]);
        return $stmt -> fetch ();

    }



// following functions used to submit to database from products and checkout php
   
    public function insertorder($userid) 
        {
            $stmt = $this->db->prepare('INSERT INTO orders (user_id, created) VALUES(?, NOW())');
            $stmt ->execute([$userid]); 
            return $this -> db ->lastInsertId();
        }

    public function insertproducttoorder($productid, $orderid)
    {
        $stmt = $this->db->prepare('INSERT INTO orders_have_products (product_id, order_id) VALUES(?, ?)');
            $stmt ->execute([$productid, $orderid]); 
            return $this -> db ->lastInsertId();

    }


}



$db = new PDO('mysql: host=localhost; dbname=bootcamp_eshop; charset=utf8;', 'root', '');

$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // this line is only for development, remove for production 

/* var_dump used to see if anything is returned
var_dump($db);
*/


/* these lines of codes are used to insert information into a database    PDO.. use for stmt insert... (do not use variables in the insert statment) */


?>