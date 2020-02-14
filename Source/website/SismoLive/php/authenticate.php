<?php
$utente = filter_input(INPUT_POST, 'nome_utente', FILTER_DEFAULT);
$password = filter_input(INPUT_POST, 'pass', FILTER_DEFAULT);
echo 'Benvenuto ' . htmlspecialchars($_POST["nome_utente"]) . '!';

$servername = "localhost";
$username = "root";
$password = "";
$nomeDB = "SismoLive";
$port = 3306;
$conn = mysqli_connect($servername, $username, $password, $nomeDB, $port);

if(!$conn){
  die("errore");
}
echo "connesison OK";

$sqlPassword = "Select psw from Utente where nome_utente = $utente";
$result = $conn->query($sql);


/*
while($row = $result->fetch_assoc()){
  echo "nome: " . $row["nome_utente"] . " password: " . $row["psw"];
}*/


$conn->close();
?>
