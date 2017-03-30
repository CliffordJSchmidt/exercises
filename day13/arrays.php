<?php

require_once('var_show.php');
$variable = 'Jan';

$fruit = array(
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
/*
     
    <?php val_show($variable);?>
    <?php var_show($variable); ?>
    <?php var_show($fruit); ?>
    <?php var_dump($fruit); ?>
*/
?>



<?php
    $array = array();
    var_show($array);

    $array[]= 'first';
    var_show($array);

    $array[]= 'second';
    var_show($array);

    $array['my key']= 'my value';
    var_show($array);

    $array[]='next';
    var_show($array);


?>



<?php
    var_show($fruit);
    $max_value=max($fruit);
    var_show($max_value);

    shuffle($fruit);
    var_show($max_value);

?>





<?php
phpinfo(); // all info
// module info, phpinfo(8) identical
phpinfo(INFO_MODULES);
?>


</body>
</html>