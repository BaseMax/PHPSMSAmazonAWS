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
$sns = new \Aws\Sns\SnsClient($parameters);
$arguments = [
    "MessageAttributes" => [
        'AWS.SNS.SMS.SMSType' => [
            'DataType' => 'String',
            'StringValue' => 'Transactional'
        ],
        'AWS.SNS.SMS.SenderID' => [
            'DataType' => 'String',
            'StringValue' => 'GitHub'
        ],
    ],
    "Message" => "Hi,\nGood news for the Open Source Friday coming soon.\nWith kind regards,\nThe GitHub Open Source Team,\nMax Base",
    "PhoneNumber" => "46720252169",
];
$result = $sns->publish($arguments);
var_dump($result);
print_r($result);
