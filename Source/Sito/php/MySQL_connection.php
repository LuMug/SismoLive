<?php
session_start();
// Include il file che effettua la connessione al database
include "connectToDB.php";
// Stringhe rappreentanti le query
$soglie = "SELECT soglia_minima, soglia_intermedia, soglia_critica FROM Configurazione";
$terremoti = "SELECT * FROM Terremoto";
// Esecuzione delle query
$querySoglie = $link->query($soglie);
$queryTerremoti = $link->query($terremoti);
// Estrae l'ultimo id_registrazione
$id_reg = $queryTerremoti->num_rows + 1;
// Estrae le tre configurazioni delle soglie
$configurazioni = $querySoglie->fetch_assoc();
$sogliaMinima = $configurazioni["soglia_minima"];
$sogliaIntermedia = $configurazioni["soglia_intermedia"];
$sogliaCritica = $configurazioni["soglia_critica"];
// Imposta il fuso orario corretto
date_default_timezone_set("Europe/Zurich");
// Data e ora attuali
$data_corrente = date("Y-m-d");
$ora_corrente = date("H:i:s");
// leggo il dato mandato dal fishino
$magnitudo = round($_POST['value'], 1);

//Inserisce il record nella tabella se il magnitudo è sopra o guale alla soglia minima
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
    $_SESSION['data'] = $data_corrente;
    require "mail.php";
}
// Manda un sms se il magnitudo è sopra o guale alla soglia critica
if ($magnitudo >= $sogliaCritica) {
    require "sms/sms.php";
}
?>
