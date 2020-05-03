<?php
echo "<table class='table' id='sortTable'>";
$f = fopen("../csv/mondo.csv", "r");
$fr = fread($f, filesize("../csv/mondo.csv"));
fclose($f);
$lines = array();
$lines = explode("\n\r", $fr);

$check = 0;
for ($i = 0;$i < count($lines);$i++)
{
    if ($check == 0)
    {
        echo "<thead class='thead-dark'>";
        echo "<tr>";
        $cells = array();
        $cells = explode(";", $lines[$i]);
        for ($k = 0;$k < count($cells);$k++)
        {
            echo "<th scope='col'>" . $cells[$k] . "</th>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "</tbody>";
    }
    else
    {

        echo "<tr>";
        $cells = array();
        $cells = explode(";", $lines[$i]);
        for ($k = 0;$k < count($cells);$k++)
        {
            echo "<td>" . $cells[$k] . "</td>";
        }
        echo "</tr>";
    }
    $check++;
}
echo "</tbody>";
echo "</table>";
?>
