<?php

$data_to_be_returned = array(
    'product_name' => 'Lenovo Yoga',
    'description' => 'A very nice laptop with a funny keyboard.'
);

echo json_encode($data_to_be_returned);
exit();