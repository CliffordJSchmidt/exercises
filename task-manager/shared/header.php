<?php
require_once './shared/user.php';
require_once './shared/database.php';

$db = new Database(); //creates database class and returns object 

$user = new User($db); // creates a user class

$name = $user -> getName();

if ($name) {
        echo htmlspecialchars($user->getName());
        echo '<a href="logout.php">logout</a>';
        echo 'products: ' . count($_SESSION['products']);
        echo '<a href="summary.php"> order summary </a>';
   } else {
       echo '<a href="login.php">login</a> / <a href="sign-up.php">sign up</a>';
   }



