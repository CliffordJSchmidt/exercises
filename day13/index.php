<?php
    require_once('var_show.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<?php /*  
   
    <nav>
    <a href="index.php">Home</a>
    <a href="

    </nav>

    <div id="content">
    New Doc - TEXT...............................

    <?php if(isset($_GET['page']) &amp;&amp; $_GET['page']=='form' : ?>
    <?php include('form.php'); ?>
    <?php else : ?>
        This is home.
    <?php endif; ?>
*/
?>
    
<?php

    var_dump($_GET);
    var_dump($_POST);
var_dump(parse_url($_SERVER['REQUEST_URI']));

?>


    </div>
</body>
</html>