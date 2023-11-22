
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20 náhodných</title>
</head>
<body>
  <h1>Pole s 20 náhodnými čísly</h1>
  
<?php

//vygenerujte pole 20 nahodnych cisel a udelejte var_dump

function generatorPole ($PocetCisel) {
    $poleCisel = array();

    for ($i = 0; $i < $PocetCisel; $i++) {
        $poleCisel[] = rand(1, 100);
    } return $poleCisel;
}

$poleCisel = generatorPole(20);
echo "Tady máš snad pole random čísel: ";
var_dump($poleCisel);
echo "<hr>";

//napiste funkci, ktera bude brat 1 argument pole a vrati sumu toho pole (otestujte na vasem poli nahodnych cisel)

function sumaPole ($poleCisel) {
  $suma = 0;

  foreach ($poleCisel as $hodnota) {
      $suma += $hodnota;
  } return $suma;
}

$suma = sumaPole ($poleCisel);

echo "Součet prvků pole je: " .$suma;
echo "<hr>";

//napiste funkci, ktera bude brat 1 argument pole a vrati aritmeticky prumer pole (otestujte na vasem poli nahodnych cisel)

function aritPrumer ($poleCisel) {
  $suma = sumaPole ($poleCisel);
  $prumer = $suma / count ($poleCisel);

  return $prumer;
}

$prumer = aritPrumer ($poleCisel);
echo "Aritmetický průměr pole je: " .$prumer;
echo "<hr>";

//napiste funkci, ktera bude prijimat argument pole a vrati nejvyssi cislo
//nesmite pouzit max() a nesmite pouzit sort()

function maxCislo ($poleCisel) {
  $nejvyssiCislo = $poleCisel[0];

  foreach ($poleCisel as $cislo) {
    if ($cislo > $nejvyssiCislo) {
      $nejvyssiCislo = $cislo;
    }
  } return $nejvyssiCislo;
}

$nejvyssiCislo = maxCislo ($poleCisel);
echo "Nejvyšším číslem v poli je: " .$nejvyssiCislo;
echo "<hr>";

//napiste funkci, ktera bude prijimat 1 argument pole a vrati nove pole, kde budou jen suda cisla
//otestujte na poli nahodnych cisel a var_dumpnete vysledek funkce

function sudaCisla ($poleCisel) {
  $sudePole = array();

  foreach ($poleCisel as $sudeCislo) {
    if ($sudeCislo % 2 == 0) {
      $sudePole[] = $sudeCislo;
    }
  } return $sudePole;
}

$sudePole = sudaCisla ($poleCisel);
echo "Nové pole se sudými čísly: ";
var_dump($sudePole);

?>
</body>
</html>
