<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If podminky</title>
</head>
<h1>If podminky</h1>
<body>
  <?php 
  $vek = rand(0,100);
  var_dump($vek);
  
  // do kulate zavorky se pise vyraz, ktery bude true nebo false (), pokud vyjde true, provede se to co je v {}
  if ($vek >= 18) {
    echo "Vitejte alkoholiku";
    echo "<br>";
    echo 
      "<ul>
        <li>Pivo</li>
        <li>Vodka</li>
        <li>Zelená</li>
        <li>Rum</li>
        <li>Cointreau</li>
      </ul>";
  } else {
    echo "Seš malej špunt";
    echo "<br>";
    echo "<ul>
      <li>Cola</li>
      <li>Sprite</li>
      <li>Juice</li>
      <li>Voda</li>
      <li>Kakao</li>
    </ul>";
  }
  
  //sleva na napoje: 0-6 100%, 7-17 50%, 18+ 0%, 65+ 25%
  $vek = rand(0,100);
  var_dump($vek);
  if ($vek <=6) {
    echo "Piješ zadarmo";
  } else if ($vek <= 17) {
    echo "Máš slevu 50%";
  } else if ($vek <=64) {
    echo "Sleva nebude - máš vydělávat";
  } else {
    echo "Máš slevu 25% dědku";
  }

  //vnorene IFy. Zápočet je za součet 2 větší než 100, pokud nesplní, může napsat opravny test, kt. musí mít na 50+ jinak letí
  echo "<h2>Vnořené IFy</h2>";
  $test1 = rand(0,100);
  $test2 = rand(0,100);
  $testOpravny = rand(0,100);
  var_dump($test1);
  var_dump($test2);
  var_dump($testOpravny);
  echo "<br>";
if ($test1 + $test2 >= 100){
    echo "Super, máš zápočet";
} else {
    if ($testOpravny >= 50) { //tohle je vnořenej if
      echo "Splnil si opravnej";
    } else {
      echo "Smůla a nazdar";
    }
}



  ?>
</body>
</html>
