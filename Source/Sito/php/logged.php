<?php
$login = "http://sismolive.online/html/login.php";
$logout = "http://sismolive.online/php/logout.php";
$parametri = "http://sismolive.online/html/configurazione.php";
// Se l'utente è loggato mostrerà il tasto di logout e per accedere alla configurazione dei parametri,
// sennò comparirà solamente il tasto per effettuare il login.
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Mostra il bottone per il login
    echo "<li class='get-started'><a href='$login'>Login</a></li>";
} else {
    // Mostra il bottone per la disconnessione dal sito oppure per accedere alla pagina dei parametri
    echo "<li class='get-started'><a href='$parametri'>Parametri</a></li>";
    echo "<li class='get-started'><a href='$logout'>Logout</a></li>";
}
?>
