<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol hardcore</title>
</head>
<body>
    <h1>Ukol hardcore</h1>
<?php
   $poleMestALidi = [
    "Praha" => ["Pepa", "Kuba", "Tony"],
    "Brno" => ["David", "Eva"],
    "Plzen" => ["Lukas", "Veronika", "Pavlina", "Honza"]
   ];

echo "<table border='1px solid'>";
foreach ($poleMestALidi AS $mesto => $poleLidi) {
    echo "<tr>
        <td>$mesto</td>
        <td>
            <ul>";
            foreach ($poleLidi AS $clovek) {
                echo "<li>$clovek</li>";
            }
    echo    "<ul>
        </td>
    </tr>";
}
echo "</table>";

?>
</body>
</html>
