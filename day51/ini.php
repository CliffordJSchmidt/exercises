<?php

// read the ini file

$contents = file_get_contents('test.ini');

$data_without_sections = parse_ini_string($contents, false);
var_dump($data_without_sections);

$data_with_sections = parse_ini_string($contents, true);
var_dump($data_with_sections);

$data_from_file = parse_ini_file('test.ini');
var_dump($data_from_file);