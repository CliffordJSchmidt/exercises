<?php
require_once './shared/user.php';
require_once './shared/database.php';



if($_POST){
    $_SESSION['products'][]=$_POST['id'];
    header('Location:index.php');
}

var_dump($_SESSION);

