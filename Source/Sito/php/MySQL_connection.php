<?php
require_once "config.php";

$soglie ="SELECT soglia_minima,soglia_critica FROM Configurazione";

$terremoti = "SELECT * FROM Terremoto;";


$querySoglie = $link->query($soglie);
$queryTerremoti = $link->query($terremoti);
$id_reg = $queryTerremoti->num_rows + 1;


$configurazioni = $querySoglie->fetch_assoc();

$sogliaMinima = $configurazioni["soglia_minima"];
$sogliaIntermedia = $configurazioni["soglia_intermedia"];
$sogliaCritica = $configurazioni["soglia_critica"];


date_default_timezone_set("Europe/Zurich");
$data_corrente = date("Y-m-d");

$ora_corrente = date("H:i:s");

$id_ter = 6;

$magnitudo = abs($_POST['value']);
file_put_contents("data.txt", $magnitudo);

//echo readfile("data.txt");

if($magnitudo >= $sogliaMinima){
    $magnitudo *= 10;
    $inserimentoDati ="INSERT INTO Terremoto(id_registrazione, id_terremoto,magnitudo,data_registrazione,orario_registrazione) VALUES ('$id_reg','$id_ter','$magnitudo','$data_corrente','$ora_corrente')";

    if ($link->query($inserimentoDati) === TRUE) {
        echo "Inserimento dati riuscito";
    } else {
        echo "Error: " . $inserimentoDati . "<br>" . $link->error;
    }
}
if($magnitudo >= $sogliaIntermedia){
    require "phpmailer/mail.php";
}
if($magnitudo >= $sogliaCritica){
    require "sms/sms.php";
}

?>
