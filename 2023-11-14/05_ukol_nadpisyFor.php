<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol Nadpisy</title>
</head>
<body>
  <h1>Ukol Nadpisy</h1>
  
<!-- chci pomocí cyklu vypsat nadpisy -->
<ul>
  <?php
  
  for ($nadpis = 1; $nadpis < 10; $nadpis++) {
    echo "<h$nadpis> Nadpis $nadpis </h$nadpis>";
  }

  ?>
</ul>


  
</body>
</html>
