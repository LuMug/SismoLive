<?php
session_start();
// Include il file che effettua la connessione al database
include "connectToDB.php";
// Query
$soglie = "SELECT soglia_minima, soglia_intermedia, soglia_critica FROM Configurazione";
$terremoti = "SELECT * FROM Terremoto";
$querySoglie = $link->query($soglie);
$queryTerremoti = $link->query($terremoti);
$id_reg = $queryTerremoti->num_rows + 1;
$configurazioni = $querySoglie->fetch_assoc();
$sogliaMinima = $configurazioni["soglia_minima"];
$sogliaIntermedia = $configurazioni["soglia_intermedia"];
$sogliaCritica = $configurazioni["soglia_critica"];
date_default_timezone_set("Europe/Zurich");
$data_corrente = date("Y-m-d");
//$data_post = abs($_POST['date']);
$ora_corrente = date("H:i:s");
//$ora_post = abs($_POST['time']);
$magnitudo = round($_POST['value'], 1);
//echo readfile("data.txt");
if ($magnitudo >= $sogliaMinima) {
    $inserimentoDati = "INSERT INTO Terremoto(id_registrazione,magnitudo,data_registrazione,orario_registrazione) VALUES ('$id_reg','$magnitudo','$data_corrente','$ora_corrente')";
    if ($link->query($inserimentoDati) === TRUE) {
        echo "Inserimento dati riuscito";
    } else {
        echo "Error: " . $inserimentoDati . "<br>" . $link->error;
    }
}
// Manda la mail se il magnitudo è sopra o guale alla soglia intermedia
if ($magnitudo >= $sogliaIntermedia) {
    $_SESSION['magnitudo'] = $magnitudo;
    $_SESSION['orario'] = $ora_corrente;
    require "mail/mail.php";
}
// Manda un sms se il magnitudo è sopra o guale alla soglia critica
if ($magnitudo >= $sogliaCritica) {
    $_SESSION['magnitudo'] = $magnitudo;
    $_SESSION['orario'] = $ora_corrente;
    require "sms/sms.php";
}
?>
