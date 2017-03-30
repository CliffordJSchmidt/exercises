<?php
session_start();
require_once './shared/database.php';
require './shared/header.php';

$db = new Database();



foreach ($_SESSION['products'] as $id){
    $product = $db->getproduct($id);
    echo 'You are buying this:';
    echo htmlspecialchars($product['name']);
    echo htmlspecialchars($product['price']);
}
?>
<form action="checkout.php" method="post">
<input type="submit" value="Check out" name="submit">
</form>

<