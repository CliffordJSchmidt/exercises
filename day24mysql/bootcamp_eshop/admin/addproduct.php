<?php

// required to connect to database
require_once '../shared/database.php';

// first step to see if form is submitting anything
// if ($_POST)
// {     
//    var_dump($_POST);
// }

// $stmt =   
// $db->prepare('INSERT INTO product .........') means insert these data values into the following collumns
// VALUES (?,?,?,?) acts as placesholders
// $stmt->execute(); calls the PDO $stmt *needs actual values in VALUE //place Holders... [$_POST['name']] takes info from form submission and //places it in values position to be put into database
if ($_POST)
{   
    //$stmt=
    //$db->prepare('INSERT INTO products (name, price, size, color) VALUES(?,?,?,?)');  **this was moved to database.php
    // $stmt->execute([$_POST['name'],$_POST['price'],$_POST['size'],$_POST['color']]);   ** used with above before move
    
    $db = new Database();
    $db -> insertproduct($_POST['name'],$_POST['price'],$_POST['size'],$_POST['color']);
    
    
    header('Location:products.php'); // header used to redirect to a page when submitted. can put in an address to redirect to same page. example addproducts.php  **has to come before var_dump or echo 
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

    <h2> Add Product </h2>
<form action="" method="post">
    Name:
    <br>
    <input type="text" name="name">
    <br>
    Price:
    <br>
    <input type="text" name="price">
    <br>
    Size:
    <br>
    <input type="text" name="size">
    <br>
    Color
    <br>
    <input type="text" name="color">
    <br>
    <input type="submit">
</form>





</body>
</html>