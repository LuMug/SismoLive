<?php
include "config.php";
// Tentativo di connesione al database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Controlla la connessione se è andata a buon fine
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
