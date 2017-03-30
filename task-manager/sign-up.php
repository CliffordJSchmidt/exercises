<?php

require_once './shared/database.php';
$db = new Database();

if($_POST){
    $userid=$db->insertuser($_POST['name'], $_POST['email'], $_POST['password']);
    session_start();
    $_SESSION['userid']=$userid;
    header('Location: index.php');
}

if($_POST) {
    var_dump($_POST);  // checks if line is submitted 
}

?>


<form action="" method="post">
name <br>
<input type="text" name="name"> <br>

    <!-- input type can also be type="text" or "email" will varify that it is an email to be used for email submission --> 
email <br>
<input type="email" name="email"><br>
password<br>
<input type="password" name="password"><br>

<input type="submit">
</form>