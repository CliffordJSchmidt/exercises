<?php


/*
<!--
    It is suggested you import this SQL into your database to try and test your solution.

Write a single SQL query that would from these tables select one record with the following data:

id	name	released	     author_name
2	Rocky Mountain High	1972	John Denver
-->
*/

$db['db_host']= "localhost";
$db['db_user']= "root";
$db['db_pass']= "";
$db['db_name']= "sqljoin";

foreach($db as $key => $value){

    define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);

if($connection){

   echo "Database connection established";
}




$query= "SELECT song.id, song.name, song.released, author.name FROM song JOIN author ON(song.author_id = author.id)" ;

var_dump($query);

$song_author_query = mysqli_query($connection, $query);

var_dump($song_author_query);

print_r($song_author_query);


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
  
    <title>sqljoin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
       <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
<!--
<table class="table table-bordered table-hover" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Released</th>
                <th>Author Name</th>
            </tr>
        </thead>
        <tbody>
                            
<?php  /*
 while($row = mysqli_fetch_assoc($song_author_query)){
                            // ['xxxxx'] must be the name of the column in database
                         
                        $song_id = $row['song.id']; 
                        $song_name = $row['song.name'];
                        $song_released = $row['song.released'];
                        $author_name = $row['author.name'];
                    
                
    
        echo "<tr>";
            echo "<td>{$song_id}</td>";
            echo "<td>{$song_name}</td>";
            echo "<td>{$song_released}</td>";
            echo "<td>{$author_name}</td>";
        echo "</tr>";
 }                    
       */ 
?>                               
        </tbody>
 </table>



-->

</body>
</html>






