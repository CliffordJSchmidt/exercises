<?php 

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
    <title>Document</title>
</head>
<body>
     <ul>
             <?php foreach($calling_codes as $unique_value => $calling_code) : ?>
           
             <li> The calling code of <?php echo $country_names[$unique_id];?> is <?php echo $calling_code; ?></li>
             
             <?php endforeach; ?>
 
             
    </ul>

   
</body>
</html>