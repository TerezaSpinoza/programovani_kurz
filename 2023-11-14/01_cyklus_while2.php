<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cyklus While</title>
</head>
<body>
  <h1>Cyklus While</h1>
  
<!-- chci pomocí cyklu vypsat položky seznamu -->
<ul>
  <?php
  $i = 0; //startovací hodnota
  while ($i < 10) {
    echo "<li>hovno - $i</li>";
    $i++;
  }

  ?>
</ul>


  
</body>
</html>
