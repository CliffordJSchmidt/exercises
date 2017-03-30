<?php

$db = new PDO('mysql: host=localhost; dbname=bssocialnetwork; charset=utf8;', 'root', '');



$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/* var_dump used to see if anything is returned
var_dump($db);
*/


/* these lines of codes are used to insert information into a database    PDO.. use for stmt insert... (do not use variables in the insert statment) */


?>