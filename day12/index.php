 <?php require_once 'functions.php';?>
  <?php require_once 'conditions.php';?>

<?php 

echo 'Hello world!'; 


$my_greeting = "Hello,  World!";

$my_greeting;


?> 

<?php /* echo tag can be written in a shorter form*/ ?>

<?= 'Hello world!'; ?>



<?php phpinfo(); /* list of possible PHP commands */ ?>


<?php

define('MY_SERVER', 'Apache');

echo MY_SERVER;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    first name: <?php echo $name; ?> <br />
    surname: <?php echo $surname; ?><br />
    yob: <?php echo $yob; ?><br />
    height: <?php echo $height; ?><br />
    My OS is: <?php echo MY_OS; ?> <br/>



    The number <?php echo $number_to_test; ?> is <?php echo print_is_even($number_to_test); ?>
    <br/>

    The persons height is <?php echo height();?>. <br/>



</body>
</html>
