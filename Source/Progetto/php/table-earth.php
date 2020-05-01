<?php
echo "<table class='table' id='sortTable'>";
$f = fopen("../csv/mondo.csv", "r");
$fr = fread($f, filesize("../csv/mondo.csv"));
fclose($f);
$lines = array();
$lines = explode("\n\r",$fr); // IMPORTANT the delimiter here just the "new line" \r\n, use what u need instead of...

$check = 0;
for($i=0;$i<count($lines);$i++)
{
  if($check == 0){
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    $cells = array();
    $cells = explode(";",$lines[$i]); // use the cell/row delimiter what u need!
    for($k=0;$k<count($cells);$k++)
      {
         echo "<th scope='col'>".$cells[$k]."</th>";
      }
        echo "</tr>";
        echo "</thead>";
        echo "</tbody>";
  }else{

    echo "<tr>";
    $cells = array();
    $cells = explode(";",$lines[$i]); // use the cell/row delimiter what u need!
    for($k=0;$k<count($cells);$k++)
    {
       echo "<td>".$cells[$k]."</td>";
    }
    // for k end
    echo "</tr>";
  }
  $check++;
}
// for i end
echo "</tbody>";
echo "</table>";
?>
