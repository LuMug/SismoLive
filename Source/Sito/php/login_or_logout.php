<?php
/*
$login = "http://localhost/SismoLive/Source/Sito/html/login.php";
$logout = "http://localhost/SismoLive/Source/Sito/php/logout.php";
$parametri = "http://localhost/SismoLive/Source/Sito/html/configurazione.php";*/


$login = "http://sismolive.online/html/login.php";
$logout = "http://sismolive.online/php/logout.php";
$parametri = "http://sismolive.online/html/configurazione.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    echo "<li class='get-started'><a href='$login'>Login</a></li>";

}
else
{
      echo "<li class='get-started'><a href='$parametri'>Parametri</a></li>";
    echo "<li class='get-started'><a href='$logout'>Logout</a></li>";
}

?>
