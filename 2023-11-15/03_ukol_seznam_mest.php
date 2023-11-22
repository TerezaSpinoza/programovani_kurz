<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol seznam mest</title>
</head>
<body>
  <h1>Ukol seznam mest</h1>

  <?php
//tabulka 3 mest
$poleMesta = array("Praha", "Vídeň", "Trondheim");
echo "<table border='1px solid'>";

 foreach  ($poleMesta AS $mesto) {
  echo "<tr>
    <td>$mesto</td>
    </tr>";
  }

echo "</table>";

//ukol jmena do číslovaného seznamu
$poleJmen = array("Terka", "Martin", "Adam");
echo "<ol>";
foreach ($poleJmen AS $jmeno) {
    echo "<li>$jmeno</li>";
}
echo "</ol>";







?>

</body>
</html>


