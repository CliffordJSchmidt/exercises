<?php

// require functions that get ALL the data
require_once('functions.php');
// get_names()
// get_ratings()

// require functions that get just data for a specific id
require_once('my-functions.php');
// get_name()
// get_rating()

// get id from the URL's GET parameters
//$unique_id = $_GET['id'];   or use the following


if(isset($_GET['id']))
{
        // get id from the URL's GET parameters
        $unique_id
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo get_name($unique_id); // echo name based on the unique id ?></title>
</head>
<body>

    <nav>
        <a href="list.php">A list of movies</a>
    </nav>

    <h1><?php echo get_name($unique_id); // echo name based on the unique id ?></h1>

    <div class="rating">
        Rating: <strong><?php echo get_rating($unique_id); // echo rating based on the unique id ?></strong>
    </div>


</body>
</html>