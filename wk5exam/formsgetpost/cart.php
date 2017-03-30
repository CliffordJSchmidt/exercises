<?php
    
require_once('functions.php');

var_dump($_POST);

$amount_in_stock=  amount_in_stock($_POST['product_id'],$_POST['color'] , $_POST['Size']);
var_dump($amount_in_stock);

if($amount_in_stock >= $amount)
  {
      add_to_cart($_POST['product_id'],$_POST['color'],$_POST['Size'],$_POST['amount']);
        if($_POST['checkout']==1)
        {
          header('Location: checkout.php');
        }
  }
  else
  {
    add_error('We are sorry. Not enough items in stock.');
    header('Location:home.php');
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WK 5exam Post</title>
</head>
<body>
    
  some text here


</body>
</html>