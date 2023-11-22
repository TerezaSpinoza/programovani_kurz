<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iterace pole</title>
</head>
<body>
  <h1>Iterace pole</h1>

  <?php
//iterace = projedu pole a projedu to po položkách
//příklad - chci ty dny vypsat do ul seznamu
$poleDny = ["pondeli", "utery", "streda", "ctvrtek", "patek", "sobota", "nedele"];
echo "<ul>";
  for ($i = 0; $i < count($poleDny); $i++){
    echo "<li>$poleDny[$i]</li>";
  }
echo "</ul>";
echo "<hr>";

//novy cyklus, ktery byl navrzeny pro iterace polí 'foreach'
//foreach se pouziva pro iterovani pole, nemusime resit podminku a inkrement
echo "<ul>";  
  foreach ($poleDny as $den) {
    echo "<li>$den</li>";
    }
echo "</ul>";
echo "<hr>";


//existuje rozsirena forma foreache
//pokud potrebujem pro ans kod znat i indexy, tak musime uvest 2 promenne misto 1
//zapisuje se to takto: $klic => $hodnota
echo "<ul>";
  foreach ($poleDny AS $index => $den) {
    
    
    echo "<li>$den je na pozici $index</li>";


  }
echo "</ul>";

//tato druha rozsirena forma se casto pouziva u klicovanych poli
$poleMobil = [
  "znacka" => "Samsung",
  "ram" => 8,
  "model" => "S23",
  "majitel" => "Tony"
];

echo "<table border='1px solid'>";
foreach($poleMobil AS $klic => $hodnota) {
  echo "<tr>
      <td>$klic</td>
      <td>$hodnota</td>
  </tr>";
}
echo "</table>";




?>
</body>
</html>
