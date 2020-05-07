<?php
// Inizializza la sessione
session_start();
// Esegue l'unset di tutte le variabili di sessione
$_SESSION = array();
// Distrugge la sessione
session_destroy();
// Reindirizza alla pagina principale
header("location: ../index.php");
exit;
?>
