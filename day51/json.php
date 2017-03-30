<?php

$data = array(
    'config' => array(
        'URL' => 'http://mysite.com',
        'host' => 'localhost',
        'port' => 80
    ),
    'environment' => 'development',
    'info' => array(
        'contact' => array(
            array(
                'name' => 'Steve',
                'position' => 'owner'
            ),
            array(
                'name' => 'Bob',
                'position' => 'developer'
            )
        ),
        'address' => 
'Data4You
Krakovská 9,
Praha 1',
        'established' => 2015
    )    
);

//file_put_contents('test.json', json_encode($data));

$file_contents = file_get_contents('test.json');

$data_as_object = json_decode($file_contents);
var_dump($data_as_object);

$data_as_array = json_decode($file_contents, true);
var_dump($data_as_array);