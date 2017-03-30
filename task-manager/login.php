<?php

require_once './shared/database.php';
$db = new Database();

if($_POST){

    // get user information by email - need function in database.php    public function getuserbyemail 
    $user = $db->getuserbyemail($_POST['email']);
    
    // verify the password
    if (password_verify($_POST['password'], $user['password'])){

    // if pw is ok, store userid into the session
        session_start();
        $_SESSION['userid']=$user['id'];
        header('Location: index.php');
    } else{
        echo 'WRONG PASSWORD!!!!';
    };    

   
   
    
}

if($_POST) {
    var_dump($_POST);  // checks if line is submitted 
}

?>


<form action="" method="post">

email <br>
<input type="email" name="email"><br>
password<br>
<input type="password" name="password"><br>

<input type="submit">
</form>