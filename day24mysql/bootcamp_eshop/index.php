
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootcamp Eshop</title>
   
</head>
<body>
     




   <div class="pagewrapper">
        <div class="contentwrapper">
            <h1>Bootcamp Eshop</h1>
            <hr>
            <h2>A Test Eshop Website</h2>
            <hr>
        </div>
        <?php

            require_once './shared/database.php';

           // $stmt= $db->prepare('SELECT id, name, price, size, color FROM products');
           // $stmt ->execute();   **** moved to database.php
           $db = new Database();   //called database from database.php then named $db
           $products = $db->getproducts(); // new $db set equal to $products to be used below in foreach 

           



            //foreach ($stmt as $product)
            //{
            //    var_dump($product);
            //}

            foreach($products as $product)
            {
                echo 'Name: ' . htmlspecialchars($product['name']) . '<br>';
                echo 'Price: ' . htmlspecialchars($product['price']) . '<br>';
                echo 'Size: ' . htmlspecialchars($product['size']) . '<br>';
                echo 'Color: ' . htmlspecialchars($product['color']) . '<br>';
                echo '<form action="summary.php" method="post">'
                .'<input type="hidden" name="id" value="' . htmlspecialchars($product['id']) . '">'
                .'<input type="submit" value="Buy This">'
                .'</form><hr>'; //adds a buy button to every foreach echo
            }
            // always use htmlspecialchars on any inputs coming from user/from the browser
            // when you echo from database post or get use htmlspecialchars




        ?> 
    </div>   



</body>
</html>


