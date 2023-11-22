<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Malá násobilka</title>
</head>
<h1>Malá násobilka</h1>
<tr>

<body>

<table border="1">

<?php //Malá násobilka
for ($radek = 1; $radek <= 10; $radek++) {
  echo "<tr>";
  for ($sloupec = 1; $sloupec <= 10; $sloupec++) {
      $vysledek = $radek * $sloupec;
      echo "<td>$vysledek</td>";
  }
  echo "</tr>";
}

    
?>

</table>

</body>
</html>
