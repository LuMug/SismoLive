<?php
session_start();
// Include il file che effettua la connessione al database
include "connectToDB.php";
$_SESSION['error'] = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Filtra i dati
    $min = filter_input(INPUT_POST, 'min', FILTER_DEFAULT);
    $intermedia = filter_input(INPUT_POST, 'intermedia', FILTER_DEFAULT);
    $critica = filter_input(INPUT_POST, 'critica', FILTER_DEFAULT);
    if ($min >= $intermedia) {
        $_SESSION['error'] = "La soglia minima deve essere più piccola della soglia intermedia!";
    } else if ($min >= $critica) {
        $_SESSION['error'] = "La soglia minima deve essere più piccola della soglia critica!";
    } else if ($intermedia >= $critica) {
        $_SESSION['error'] = "La soglia intermedia deve essere più piccola della soglia critica!";
    } else {
        $terremoti = "UPDATE Configurazione SET soglia_minima = '$min', soglia_intermedia = '$intermedia', soglia_critica = '$critica' ";
        $result = $link->query($terremoti);
    }
    header("location: ../html/configurazione.php");
}
?>
