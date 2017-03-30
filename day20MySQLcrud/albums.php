
<?php
require_once 'database.php'; // this connects to the database when moved allow infomation before the form in submitted



if($_POST) {
        $stmt = $db-> prepare('INSERT INTO albums (name, id_owner) VALUES (?,?)');
        $stmt -> execute([$_POST['name'], $_POST['owner']]);
        header('Location: albums.php?status=ok');
}

if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo 'OK';
}

$stmt = $db->prepare('SELECT id, firstname, lastname FROM users ORDER BY lastname, firstname');
$stmt->execute();
$owners= [];

foreach ($stmt-> fetchALL() as $value){
        $owners[$value['id']] = $value['firstname'] . '' . $value['lastname'];
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
        </br>
        <label for="owner">input owner number:</label>
            <select name="owner">
                    <?php  
                        foreach ($owners as $id => $name){
                            echo "<option value=$id>$name</option>";
                        }
                    ?>
            </select>

    <input type="submit">

</form>

