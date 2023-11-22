<?php

if (array_key_exists("obvod-submit", $_POST)) {
    $polomer = $_POST["polomer"];

    //is_numeric je funkce, ktera zkontorluje zda zadany string se da prevest an cislo
    //is_numeric vraci boolean
    if(is_numeric($polomer)) {
        if ($polomer > 0) {
            $obvod = $polomer * 2 * pi();
        }else{
            $chyba = "Zadane cislo nesmi byt zaporne!";
        }
    }else{
        $chyba = "Hej troubo, zadej cislo!!!";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukol formular obvod</title>
</head>
<body>
    <h1>Ukol formular obvod</h1>
    <!-- uzivatel si zada do formulare nejaky polomer, a klikne na tlacitko spocitej obvod -->
    <!-- 
    vypiste mu vysledek do stranky ve tvaru: 
    Kruh s polomerem xxx ma obvod xxx.
    -->
    <form action="" method="post">
        <label for="hroch">Polomer:</label>
        <input type="text" name="polomer" id="hroch">
        <br>
        <input type="submit" name="obvod-submit" value="Vypocitej obvod">
    </form>

    <?php
    //poku existuje promenna chyba vypsat text chyby
    if (isset($chyba)) {
        echo $chyba;
    }

    //pokud existuje obvod tak vypsat text vysledku
    if (isset($obvod)) {
        echo "Kruh s polomerem $polomer ma obvod $obvod.";
    }
    ?>
</body>
</html>
