

<?php
$movies = array(
  0 => 'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <ol>
        <li>'The Shawshank redemption'</li>
        <li>'The Godfather'</li>
        <li>'The Godfather II'</li>
        <li>'Dark Knight'</li> 
        <li>'12 angry men'</li> 
        <li>'Schindler\'s list'</li>
        <li>'Pulp fiction'</li>
        <li>'Lord of the Rings: Return of the King'</li>
        <li>'The good, the bad and the ugly'</li>
        <li>'Fight club'</li>
    </ol>
    
<ol>
    <?php foreach($movies as $movie_name) : ?>
            <li><?php echo $movie_name; ?></li>
    <?php endforeach; ?>
</ol>


<ol>
    <?php foreach($movies as $movie_name) : ?>
            <li><?php echo $movie_name; ?></li>
    <?php endforeach; ?>
</ol>

<!--           
<?php for($i = 0; $i < count($movies); ++$i) : ?>

    <li><?php echo $movies[$i]; ?></li>

<?php endfor; ?>


<hr>

<?php
$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);
?>



<ol>
    <?php foreach($movie_names as $movie_names as $unique_id => $movie_name) : ?>
            <li><?php echo $movie_names; ?></li>
    <?php endforeach; ?>
</ol>



<?php asort ($movie_rating); ?>
<ol>
    <php foreach ($movie_ratings as $unique_id => $rating):?>
        <li><?php echo $movie_name; ?>

</ol>






</body>
</html>



