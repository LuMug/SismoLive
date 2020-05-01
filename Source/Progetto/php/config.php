<?php/*
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'matthias');
define('DB_PASSWORD', 'matthias');
define('DB_NAME', 'SismoLive');*/

define('DB_SERVER', '160.153.133.208');
define('DB_USERNAME', 'sismo');
define('DB_PASSWORD', 'sismo');
define('DB_NAME', 'SismoLive');

/* Tentativo di connesione al database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Controlla la connessione
if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
