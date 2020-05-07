<?php
require_once ('messagebird/vendor/autoload.php');
// Set your own API access key here.
$MessageBird = new \MessageBird\Client('');
$Message = new \MessageBird\Objects\Message();
//Nome del mittente
$Message->originator = 'SismoLive';
//Numero del destinatario
$Message->recipients = ['+41XXXXXXXX'];
//Messaggio da mandare
$Message->body = 'Allarme terremoto!';
//Invia il messaggio
try {
    $MessageResult = $MessageBird->messages->create($Message);
    var_dump($MessageResult);
}
catch(\MessageBird\Exceptions\AuthenticateException $e) {
    // That means that your accessKey is unknown
    echo 'wrong login';
}
catch(\MessageBird\Exceptions\BalanceException $e) {
    // That means that you are out of credits, so do something about it.
    echo 'no balance';
}
catch(\Exception $e) {
    echo $e->getMessage();
}
