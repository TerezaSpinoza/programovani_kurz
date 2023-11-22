<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teploty</title>
</head>
<h1>Ukol teploty</h1>
<tr>

<body>

<table border="1">

  <?php //°C*1,8+32=°F
  $C = -100;
    for ($C = -100; $C <= 100; $C+=10) {
      $F = $C*1.8+32;
      echo "<tr>
        <td>$C</td>
        <td>$F</td>
          </tr>";
    }
?>

</table>

</body>
</html>
