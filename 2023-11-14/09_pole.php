<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pole</title>
</head>
<h1>Pole - Array</h1>
<body>
  <?php
  // pole je datový typ, který může obsahovat více hodnot
  // pole jde vytvořit pomocí [] altgr+F
  $poleZelenina = ["okurka","mrkev", "cuketa", "baklažán"];
  var_dump($poleZelenina);
  // pozice hodnot se nazývají index, začínáme 0 (indexujeme)

  // druhý zp. vytvoření je pomocí fce array
  $poleOvoce = array("jablko","rajče","banán");
  var_dump($poleOvoce);
  echo "<br>";

  // vypište ovoce na indexu 2
  echo $poleOvoce[2];
  echo "<br>";

  // ulož do proměnné oblibenaZelenina hodnotu na indexu 3 a napiš do textu
  $oblibenaZelenina = $poleZelenina [3];
  echo "Tonyho oblibena zelenina je $oblibenaZelenina.<br>";

  echo "Tonyho oblibena zelenina je {$poleZelenina [3]}";

  //zmenime hodnotu zeleniny na indexu 3 na batáty
  $poleZelenina[3] = "batáty";
  var_dump($poleZelenina); //batáty vyšťouchly cuketu
  echo "<br>";

  //přidání 1 nové zeleniny navíc. Přidává se pomocí prázdných []
  //když neuvedu index, tak to znamená, že vkládám nový prvek
  $poleZelenina[] = "cibule";
  var_dump($poleZelenina);
  echo "<br>";

  $cars = array("Volvo", "VW", "Porshe");
  unset($cars[0]); //zmízí to celý do prdele jak index, tak hodnota
  $cars = array_values($cars);
  var_dump($cars); //sežadí se to znovu od 0 a zobrazí posunutý
  echo "<br>";

  //mazani hodnoty
  //chceme smazat zeleninu na indexu 1
  unset($poleZelenina[1]);
  var_dump($poleZelenina);

  //pokud se chcete zbavit der v poli
  //pouzijme funkci array_values a vytvorime si nove pole
  $novePoleZelenina = array_values($poleZelenina);
  var_dump($novePoleZelenina);

  
  //funcke array_keys nam vypise vsechny dostupne indexy
  var_dump(array_keys($poleZelenina));
  var_dump(array_keys($novePoleZelenina));

//----------------TADY POTUD POVINNY---------------------------------------------------------------------------

//pole muze mit mix datovych typu
$poleStudent = ["Tony", false, ["programovani", "matika", "dejepis"], 2.5, 1992];
var_dump($poleStudent);
echo "Student $poleStudent[0] zrovna studuje předmět {$poleStudent[2][0]}. <br>";

//když mám mix datovejch typu, je lepsi misto ciselnych indexu pouzivat textove klice
//PHP muze mit misto indexu textove znaceni pozic
//key => value (klíč=>hodnota)
$poleLektor = [
  "jmeno" => "Tony",
  "rokNarozeni" => 1992,
  "hobby" => ["plavani", "baskytara", "nataceni"],
  "jeZenaty" => false,
  "hmotnost" => 56.5,
  "pracovniNotebook" => [
    "znacka" => "MSI",
    "ram" => 64,
    "jeVZaruce" => true,
    "prislusenstvi" => ["adapter", "brasna", "mys"]
  ]
];
echo "<br>";

echo $poleLektor["jmeno"]; //Tony
echo "<br>";
echo $poleLektor["hobby"][1]; //baskytara
echo "<br>";
echo $poleLektor["pracovniNotebook"]["znacka"]; //MSI
echo "<br>";

//Lektor xxx se narodil v roce yyy a jeho notebook ma zzzGB RAM.

echo "Lektor {$poleLektor["jmeno"]} se narodil v roce {$poleLektor["rokNarozeni"]} a jeho notebook ma {$poleLektor["pracovniNotebook"]["ram"]}GB RAM. <br>";

//Tony ztloustne na 60kg
$poleLektor["hmotnost"] = 60;

//protoze neni ciselny index, nejde vlozit pomocí prázdnejch hranatejch závorek nový index
$poleLektor["barvaOci"] = "hneda";

//přidáme monitor do příslušenství
$poleLektor["pracovniNotebook"]["prislusenstvi"][] = "monitor";
var_dump($poleLektor);
echo "<br>";

//count je fce na zjištění počtu prvků v poli

echo count($poleZelenina);
echo "<br>";
echo count($poleOvoce);
echo "<br>";
echo count($poleLektor);
echo "<br>";

  ?>
</body>
</html>
