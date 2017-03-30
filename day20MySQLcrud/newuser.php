
<?php
require_once 'database.php'; // this connects to the database when moved allow infomation before the form in submitted


//This version is used to add a new user to the database
if($_POST) {
        $stmt = $db-> prepare('INSERT INTO users (firstname, lastname) VALUES (?,?)');
        $stmt -> execute([$_POST['firstname'], $_POST['lastname']]);
        header('Location: albums.php?status=ok');   // albums.php presents the form for adding albums to user account
}

if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo 'OK';
}

?>


<?
/*
if ($_POST) {
    var_dump($_POST);
    }
*/
?>


<form action=" " method="post">
        
      
        <label for="firstname">First Name:</label>
            <input name="firstname">
        </br>
        <label for="lastname">Last Name:</label>
            <input name="lastname">
                   
        </br>    

    <input type="submit">

</form>

