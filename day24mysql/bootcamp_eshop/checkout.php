<?php
require_once './shared/database.php';
//var_dump($_POST);



$db = new Database();
    if ($_POST)
        {
            $orderid= $db->insertorder(1);
            $db-> insertproducttoorder($_POST['id'], $orderid); //id is coming from the form ($product['id'])
           
            header('Location: index.php');

        }


