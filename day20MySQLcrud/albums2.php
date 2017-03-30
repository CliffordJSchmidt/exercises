<!-- this code is the first part posting new album using id_owner number -->
<?php

if($_POST) {
        require_once 'database.php';
        $stmt = $db-> prepare('INSERT INTO albums (name, id_owner) VALUES (?,?)');
        $stmt -> execute([$_POST['name'], $_POST['owner']]);
        header('Location: albums.php?status=ok');
}

if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo 'OK';
}


?>



<?
if ($_POST) {
    var_dump($_POST);
    }
?>



<form action=" " method="post">
        
      
        <label for="name">Album Name:</label>
            <input name="name">
   
        <label for="owner">input owner number:</label>
            <input name="owner">



    <input type="submit">

</form>

