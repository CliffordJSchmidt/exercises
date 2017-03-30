<?php

// YAML
// YAML Ain't a Markup Language

require_once 'Spyc.php';

$data = Spyc::YAMLLoad('test.yml');

var_dump($data);

$new_data = array(
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

$yaml_string = Spyc::YAMLDump($new_data, 2);

file_put_contents('new_test.yml', $yaml_string);