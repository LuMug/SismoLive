<?php
$login = "http://localhost/Progetto/html/login.html";
$logout = "http://localhost/Progetto/php/logout.php";
$parametri = "http://localhost/Progetto/html/configurazione.php";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
echo  "<li class='get-started'><a href='$login'>Login</a></li>";
}else{
echo  "<li class='get-started'><a href='$parametri'>Parametri</a></li>";
echo  "<li class='get-started'><a href='$logout'>Logout</a></li>";
}
?>
