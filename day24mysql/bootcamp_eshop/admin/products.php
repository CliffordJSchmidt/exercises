<?php

require_once '../shared/database.php';

$stmt= $db->prepare('SELECT id, name, price, size, color FROM products');
$stmt ->execute();

//foreach ($stmt as $product)
//{
//    var_dump($product);
//}

foreach($stmt as $product)
{
    echo'Name: ' . htmlspecialchars($product['name']) . '<br>';
    echo'Price: ' . htmlspecialchars($product['price']) . '<br>';
    echo'Size: ' . htmlspecialchars($product['size']) . '<br>';
    echo'Color: ' . htmlspecialchars($product['color']) . '<br><hr>';
}
// always use htmlspecialchars on any inputs coming from user/from the browser
// when you echo from database post or get use htmlspecialchars



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootcamp Eshop</title>
    
</head>
<body>
    
            <a href="addproduct.php">Add New Product</a>
       

</body>
</html>