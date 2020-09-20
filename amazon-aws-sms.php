<?php
/*
 * @Name: PHP SMS Amazon SNS AWS
 * @Repository: https://github.com/BaseMax/PHPSMSAmazonAWS
 * @Description: A quick example of sending SMS with AWS SNS Using Amazon Service. 
 * @Author: Max Base
 * @Date: 2020-09-20
 */
require './vendor/autoload.php';
$KEY='';
$SECRET='';
$parameters = [
    'version' => 'latest',
    'region' => 'us-east-1',
    'credentials' => [
        'secret' => $SECRET,
        'key' => $KEY,
    ],
];
