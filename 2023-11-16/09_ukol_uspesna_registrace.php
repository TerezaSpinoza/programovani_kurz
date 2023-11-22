<?php
//zde si nadefinujeme vychozi hodnoty, aby nam to nevyhazovalo chybu s neexistuji promennou a nebo nemuseli pouzivat fci isset
$jmeno = "";
$vek = "";
$pohlavi = "";
$chybaJmena = "";
$chybaVeku = "";
$chybaPohlavi = "";
$moznostiPohlavi = [
    "muz" => "Muž",
    "zena" => "Žena",
    "ostatni" => "Ostatní"
];


if (array_key_exists("registrace-submit", $_POST)) {
  //vytahneme si hodnoty z formulare
    $jmeno = $_POST["jmeno"];
    $vek = $_POST["vek"];
    $pohlavi = $_POST["pohlavi"];

    //na zacatku enz to zacneme kontorlovat, tak si pripavime tuto promennou
    $jeValidni = true;

    //zde probehne kontorla
    //kontrola jmena
    if (mb_strlen($jmeno) < 3) {
        $jeValidni = false;
        $chybaJmena = "Hele pako, zadal jsi moc kratke jmeno.";
    }

    //kontorla veku
    if (is_numeric($vek)) {
        if ($vek < 18) {
            $jeValidni = false;
            $chybaVeku = "Musis byt plnolety!!";
        }
    }else{
        $jeValidni = false;
        $chybaVeku = "Musis zadat cislo troubo!!";
    }

    //kontorla pohlavi
    if ($pohlavi != "muz") {
        $jeValidni = false;
        $chybaPohlavi = "Mohou vstoupit jen muzi.";
    }



    //koukneme se na promenou jeValidni, pokud zustala true, taka vime, ze vse bylo vporadku
    if ($jeValidni == true) {
        $zprava = "Uspech.";
    }else {
        $zprava = "Neuspech.";
    }

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace formular</title>
</head>
<body>
    <h1>Registrace formular</h1>

    <?php

if (array_key_exists("registrace-submit", $_POST) && $jeValidni == true) {
    //pokud uzivatel odeslal formular a vse vyplnil spravne, tak mu vypiseme OK
    echo "Vse OK";
}else{
    //pokud uzivatel formular jeste neodeslal nebo udelal chybu, tak mu zobrazime formular
     ?>
     <form action="" method="post">
        <label for="kocka">Jmeno</label>
        <input type="text" name="jmeno" id="kocka" value="<?php echo $jmeno; ?>">
          <?php echo $chybaJmena; ?>
        <br>
        <label for="pes">Vek</label>
        <input type="text" name="vek" id="pes" value="<?php echo $vek; ?>">
          <?php echo $chybaVeku; ?>
        <br>
        <label for="slon">Pohlavi</label>
        <select name="pohlavi" id="slon">
          <?php
          foreach ($moznostiPohlavi as $klic => $hodnota) {
            if ($klic==$pohlavi) {
            echo "<option value='$klic' selected>$hodnota</option>";
            } else {
                echo "<option value='$klic'>$hodnota</option>";
            }
          }  
          ?>
        </select>
            <?php echo $chybaPohlavi; ?>
        <br>
          <input type="submit" name="registrace-submit" value="Registruj me">
    </form>
    <?php
 }

    ?>
</body>
</html>
