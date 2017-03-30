<?php
require_once './shared/database.php';
//var_dump($_POST);

$db = new Database();
$product = $db->getproduct($_POST['id']);
//var_dump($product);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

<?php
                echo 'This is your product selection for purchase';
                echo 'Name: ' . htmlspecialchars($product['name']) . '<br>';
                echo 'Price: ' . htmlspecialchars($product['price']) . '<br>';
                echo 'Size: ' . htmlspecialchars($product['size']) . '<br>';
                echo 'Color: ' . htmlspecialchars($product['color']) . '<br>';
                echo '<form action="checkout.php" method="post">'
                .'<input type="hidden" name="id" value="' . htmlspecialchars($product['id']) . '">'
                .'<input type="submit" value="checkout">'
                .'</form><hr>'; //adds a buy button to every foreach echo
         
                if ($_POST){
                    var_dump($_POST);
                }

?>








</body>
</html>