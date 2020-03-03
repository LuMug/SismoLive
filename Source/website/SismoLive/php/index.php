<?php
$nome_utente = filter_input(INPUT_POST, 'nome_utente', FILTER_DEFAULT);
$psw = filter_input(INPUT_POST, 'pass', FILTER_DEFAULT);

//echo 'Benvenuto ' . htmlspecialchars($_POST["nome_utente"]) . '!';

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

$pswCript = md5($psw);

$sql = mysqli_query($conn, "SELECT * FROM Utente WHERE nome_utente = '".$_POST['nome_utente']."' and psw = '".$pswCript."'");
$row = mysqli_num_rows($sql);
echo "<br>";

if($row == 1){
  header("Location:../index.html");
}else{
  echo "BRAVO HAI SBAGLIATO LA PASSWORD!!!!!!!!!!!!!!";
}

$conn->close();
?>
