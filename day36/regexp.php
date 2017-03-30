<?php

//limiter #   pattern a   limiter #  case-insensitive i 
$pattern = '#a#i';

$string = 'Cat';

$result = preg_match($pattern, $string, $matches);

var_dump($result);




