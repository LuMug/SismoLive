<?php
require_once "config.php";

$soglie ="SELECT soglia_minima,soglia_critica FROM Configurazione";

$id_reg ="SELECT max(id_registrazione) FROM Terremoto;";

/*
$querySoglie = $link->query($soglie);
$queryIdReg = $link->query($id_reg);
//echo $queryIdReg["id_registrazione"];

$configurazioni = $querySoglie->fetch_assoc();

$sogliaMinima = $configurazioni["soglia_minima"];
$sogliaCritica = $configurazioni["soglia_critica"];*/

$data_corrente = date("Y-m-d");
$ora_corrente = date("H:i:s");

$id_ter = 6;
$magnitudo = rand(1,9);

echo "Soglia minima: " . $sogliaMinima . "<br>" . "Soglia critica:" . $sogliaCritica;
echo "<br>";

$inserimentoDati ="INSERT INTO Terremoto(id_registrazione, id_terremoto,magnitudo,data_registrazione,orario_registrazione) VALUES ('$ultimoIdRegistrazione','$id_ter','$magnitudo','$data_corrente','$ora_corrente')";

if ($link->query($inserimentoDati) === TRUE) {
    echo "Inserimento dati riuscito";
} else {
    echo "Error: " . $inserimentoDati . "<br>" . $link->error;
}
?>
