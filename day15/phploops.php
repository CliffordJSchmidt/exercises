<?php 

require_once('var_show.php');

$number = 1;

for ($i=0; $i < 20; $i++) { 
		echo $number . ' ';
		$number = $number + 3;
}

$array = [];

for ($i=0; $i < 5; $i++) { 
	$array[$i] = 'value';
	val_show($array);
}

$fruit = [
	'banana' => 'yellow',
	'orange' => 'orange',
	'kiwi' => 'green',
	'lici' => 'white',
	'grapefruit' => 'red',
	'blackberries' => 'black',
	'raspberries' => 'pink',
];

val_show($fruit);

foreach ($fruit as $key => $value) {
	echo $key;
	echo ' : ';
	echo $value;
	echo '<br>';
	echo '<hr>';
}

echo '<br> <br>';



foreach ($fruit as $key => $value) {
	echo $key . ' : ' . $value . '<br> <hr>';
}


$order = [
	'Macbook' => '€ 1500',
	'Apple TV' => '€ 200',
	'Router'=> '€ 75', 
	'Toy'=> '€ 20',
	'Laptop' => '€ 700',
];

foreach ($order as $value => $price) {
	echo "I am buying this " . $value . 'and it costs: ' . $price . '<br>';
};

$order = [
	['Item' => 'Macbook',
	'Price' => 1500],

	['Item' => 'Apple TV', 
	'Price' => 200],

	['Item' => 'Router',
	'Price' => 75],

	['Item' => 'Toy',
	'Price' => 20],

	['Item' => 'Stupid Thing',
	'Price' => 700],
];


echo '<br> <br>';

$total = 0;
foreach($order as $prod) {
	$total = $total + $prod['Price'];
	echo "I am buying this " . $prod['Item'] . ' costs: € ' . $prod['Price'] . '<br>';
};

echo '<br> <hr> <br> total price is: € ' . $total . '.00,-'; 



