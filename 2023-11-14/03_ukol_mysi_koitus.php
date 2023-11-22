<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ukol Myši</title>
</head>
<body>
  <h1>Ukol Myši</h1>
  
<!-- chci pomocí cyklu zjistit, kolikrát se množí myši, když jeden pár ročně vyprodukuje 8 mladejch, dokud se nedostanem na hranici 3mil ks -->
<ul>
  <?php
  // v roce 1 mame 10 mysi
  // v roce 2 mame 50 mysi
  // v roce 3 mame 250 mysi
  $par = 2; //vezmu počet myší, vynásobim 4 a přičtu počáteční myši
  $mlady = 4;
  $rok = 1;
  //$mysiCelkem = $par+$mlady;
  while ($par <= 3000000) {
    $mlady = $par * 4;
    $par += $mlady;
    echo "Počet myší pro rok $rok je $par <br>";
    $rok++;
  
  }

  ?>
</ul>


  
</body>
</html>
