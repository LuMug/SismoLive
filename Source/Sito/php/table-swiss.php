<?php
echo "<table class='table' id='sortTable'>";
// Apre il csv di riferimento
$f = fopen("../csv/svizzera.csv", "r");
// Legge il contenuto del file
$fr = fread($f, filesize("../csv/svizzera.csv"));
fclose($f);
$lines = array();
//Rimuove tutti le nuove righe
$lines = explode("\n\r", $fr);
$check = 0;
for ($i = 0;$i < count($lines);$i++) {
    if ($check == 0) {
        echo "<thead class='thead-light'>";
        echo "<tr>";
        $cells = array();
          // Toglie , tutti i dati
        $cells = explode(",", $lines[$i]);
        for ($k = 0;$k < count($cells);$k++) {
            echo "<th scope='col'>" . $cells[$k] . "</th>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "</tbody>";
    } else {
        echo "<tr>";
        $cells = array();
          // Toglie , tutti i dati
        $cells = explode(",", $lines[$i]);
        for ($k = 0;$k < count($cells);$k++) {
            echo "<td>" . $cells[$k] . "</td>";
        }
        echo "</tr>";
    }
    $check++;
}
echo "</tbody>";
echo "</table>";
?>
