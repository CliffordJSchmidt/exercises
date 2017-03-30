
<!-- While loop: checks condition first then runs -->
<?php
$iterator = 0;

while($iterator<10)
{
    $iterator++;
    echo $iterator . '<br />';
}

?>
<hr>
<!-- do... while:  runs code first then checks condition -->

<?php
$iterator = 0;

do {
    $iterator++;
    echo $iterator . '<br />';
} while($iterator<10)

?>


<hr>

<!-- for loop: used when you want to run something an exact number of times -->
<?php


$iterator = 0;

for($number = 0; $number < 10; $number++) 
 {
     //code to run long as number is <10, i.e. 10 times
 }

?>


 <!-- common $iterator names is i or j -->

for($i = 0; $i < 10; $i++)
{
    for($j = 0; $j < 10; $j++)
    {
        echo ($i*10)+$j. '<br />';
    }
}


<hr>

<!-- excersize -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<ul>
<?php for($i = 0; $i < 5; $i++) : ?>
    <li><?php  echo $i;  ?></li>
<?php endfor; ?>
</ul>


<!-- counting down from 10, skipping 7, breaking at after 3 --> 
<ul>
<?php for($i = 10; $i > 0; $i--) : ?>
  
    <?php if($i==7) continue; ?>
    <?php if($i<3) break ?>
    <li>List item number <?php  echo $i;  ?></li>
<?php endfor; ?>
</ul>


<!-- end loops -->








</body>
</html>

