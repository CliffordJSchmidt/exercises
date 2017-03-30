<?php
$color='blue'; // this is just to test 
$product_id=321; // int to use for test
$size='XS'; // size to use for test
$amount= 3; // ammount to use for test
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>

    
    <form action="cart.php" method="post">

        <br />
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <br />
        <br />

        Product Color:<br />
        <label for="product_color">
            <input type="radio" name="color" value="blue" <?php 
            if($color == "blue")
            {
               echo' checked';
            }     
            ?>
            > Blue<br>

            <input type="radio" name="color" value="black" <?php if($color=='black') echo  ' checked';?> > Black<br>




        </label>
        <br />
        <br />

        Size:<br />
            <select name="Size">
            <option value="XS" <?php if($size=='XS') echo' selected';?>>XS</option>
            <option value="S" <?php if($size=='S') echo' selected';?>>S</option>
            <option value="M" <?php if($size=='M') echo' selected';?>>M</option>
            <option value="L" <?php if($size=='L') echo' selected';?>>L</option>
            <option value="XL" <?php if($size=='XL') echo' selected';?>>XL</option>
            <option value="XXL" <?php if($size=='XXL') echo' selected';?>>XXL</option>
        </select>
        <br />
        <br />

        Amount:<br />
            <input type="text" name="amount" value=''<?php if($amount==3) echo' 3';?>><br>
        <br />
        <br />
        Checkout?:<br />
            <input type="checkbox" name="checkout" value="1"> Yes<br>
        <br />
        <br />  
        Submit:<br /> 
            <input type="submit" name="save" value="save" />

    </form>


</body>
</html>