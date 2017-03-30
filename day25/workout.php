<?php
//1
$movie_name = "Arrival";


//2
$ratings = array
    (       69,
            95,
    );


//3
foreach ($ratings as $rating)
{



}

//4
function print_rating ($rating)
{

}

//5
function print_rating ($rating)
{
    echo $rating . " %";

}

//6
$rating = array(
    'user642'=> 69,
    'user214'=> 95,
    'user013'=> 82

);

//7


??????????????????




//8

$user_names = array(
        'user642' => 'Bob',
        'user214' => 'Stuart',
        'user013' => 'Keven'
);

$user_name = $user_names['user214'];


//9

function get_username($user_id)
{
    global $user_name;
    return $user_name[$user_id];
}

//or

function get_username_2($user_id)
{
    $user_names = array(
        'user642'=> 'Bob',
        'user214'=> 'Stuart',
        'user013'=> 'Keven'
    );
    return $user_names[$user_id];
}

$key_for_stuart = array_search('Stuart', $user_name); 
var_dump($key_for_sturart);


//10

foreach($ratings as $user_id => $rating)
{
    echo get_username($user_id) . 'gave the move a ' . $rating .' % rating <br />';
}

