<?php
require_once("Mobile.php");

$mobile = new Mobile();

$rawData = $mobile->getByName('Apple iPhone 6S');

if (empty($rawData)) {
    $statusCode = 404;
    $rawData = array(
        'error' => 'No mobiles found!',
    );
} else {
    $statusCode = 200;
}

print_r($rawData);