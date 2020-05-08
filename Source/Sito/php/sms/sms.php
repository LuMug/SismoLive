<?php
require_once ('messagebird/vendor/autoload.php');
// Chiave API
$MessageBird = new \MessageBird\Client('');
$Message = new \MessageBird\Objects\Message();
//Nome del mittente
$Message->originator = 'SismoLive';
//Numero del destinatario
$Message->recipients = ['+41789246797'];
//Messaggio da mandare
$Message->body = 'Allarme terremoto!';
//Invia il messaggio
try {
    $MessageResult = $MessageBird->messages->create($Message);
}
catch(\MessageBird\Exceptions\AuthenticateException $e) {
    // Significa che la chiavi API è sbagliata
    echo 'Chiave API errata';
}
catch(\MessageBird\Exceptions\BalanceException $e) {
    // Significa che il credito è finito
    echo 'Credito finito';
}
catch(\Exception $e) {
    echo $e->getMessage();
}
?>
