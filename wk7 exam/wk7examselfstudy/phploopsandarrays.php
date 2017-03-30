<?php 
/* Take the following arrays.

Both are indexed with the same indexes - unique two-letter country codes.

Write PHP code to loop through the array $calling_codes with the foreach loop and for each key and value print a line of text similar to this (replacing the country name and the number with the right values):

The calling code of USA is +1<br>
It should print 5 lines in total. */


$calling_codes = array(
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
);

$country_names = array(
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>      
    <?php foreach($calling_codes as $unique_value => $calling_code) : ?>
    
     

        <li> The calling code of <?php echo $country_names[$unique_value]; ?> is <?php echo $calling_code;?> <br> </li>

    <?php endforeach; ?> 

</un> 



</body>
</html>