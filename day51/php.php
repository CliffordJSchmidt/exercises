<?php

require_once 'Spyc.php';

$data = Spyc::YAMLLoad('new_test.yml');

var_dump($data);

$php_code = var_export($data, true);

var_dump($php_code);

$php_code = '<?php $data = '.$php_code.';';

file_put_contents('test.php', $php_code);

include 'test.php';

var_dump($data);