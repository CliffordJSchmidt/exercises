<?php
        session_start(); 
 
        unset($_SESSION['userid']);  
        // can also be written as $_SESSION = array();

        session_destroy(); 
        header("Location: index.php"); 


?>