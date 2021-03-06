<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
$sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token  = "your_auth_token";
$twilio = new Client($sid, $token);

$engagement = $twilio->preview->studio->flows("FWXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                      ->engagements
                                      ->create("+15558675310", "+15017122661");

print($engagement->sid);