<?php

require_once('sms/vendor/autoload.php');

$MessageBird = new \MessageBird\Client(''); // Set your own API access key here.

$Message             = new \MessageBird\Objects\Message();
$Message->originator = 'SismoLive';
$Message->recipients = [ '+41XXXXXXXX' ];
$Message->body       = 'Allarme terremoto!';

try {
    $MessageResult = $MessageBird->messages->create($Message);
    var_dump($MessageResult);

} catch (\MessageBird\Exceptions\AuthenticateException $e) {
    // That means that your accessKey is unknown
    echo 'wrong login';

} catch (\MessageBird\Exceptions\BalanceException $e) {
    // That means that you are out of credits, so do something about it.
    echo 'no balance';

} catch (\Exception $e) {
    echo $e->getMessage();
}
