<?php
require_once "config.php";

$soglia_min = '';
$soglia_critica = '';

$soglie ="SELECT soglia_minima,soglia_critica FROM Configurazione";

$result    = $link->query($soglie);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $soglia_min = $row['soglia_minima'];
        $soglia_critica = $row['soglia_critica'];
    }
}
?>
