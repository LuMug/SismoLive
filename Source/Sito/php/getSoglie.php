<?php
// Include il file che effettua la connessione al database
include "connectToDB.php";
$soglia_minima = '';
$soglia_critica = '';
$soglia_intermedia = '';
// Query
$soglie = "SELECT soglia_minima, soglia_intermedia, soglia_critica FROM Configurazione";
$result = $link->query($soglie);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $soglia_minima = $row['soglia_minima'];
        $soglia_intermedia = $row['soglia_intermedia'];
        $soglia_critica = $row['soglia_critica'];
    }
}
?>
