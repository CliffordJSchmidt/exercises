<?php require_once('var_show.php');

	$a = [1, 2, 3, 4];
	val_show($a);

	$user = [
	'name' => 'johnny',
	'lastname' => 'walker',
	'city' => 'Prague',
	'country' => 'Greece',
	];

	val_show($user);

	echo $user['lastname'];
	

	//add a new item
	$user['age'] = 22;
	val_show($user);

	//we can also adjust an existing value
	$user['age'] = 24;
	val_show($user);

	//if you randomly add a new value to an array it will automatically take or create the next integer key

	$user[] = 'random content';
	val_show($user);

