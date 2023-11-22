<?php
    //zde se zpracovavaji formulare
    //esituji 3 promenne typu pole, ve kteryhc najdete formularova data, ktera uzivatel poslal
    var_dump($_GET);
    var_dump($_POST);
    var_dump($_REQUEST);

    //pokud byl formular odeslany GET metodou, tak se vsechna vyplnena data objevi v URL stranky
    //vse co je za ? v URL jsou jeji parametry
    //parametry se v url oddeluji &
    //pokud nekomu poslete tneto odkaz a on na to klikne, tak to same jako kdyby sam vyplnil telefon 123456789 a jmeno Tony a pak kliknul na odeslat
    //http://localhost/programator-listopad/2023-11-16/03-formulare.php?telefon=123456789&jmeno-uzivatele=Tony

    //jak zpracujeme formular?
    //pokud na strance nebyl zadny formular odeslan tak tay 3 pole $_GET, $_POST a $_REQUEST budou prazdne
    //jeslti uzivtael poslal formlar ted pozname tak, za v poli bude existovat name/klick, ktery jsme nadefinovali ve formulari 
    if (array_key_exists("odber-submit", $_GET)) {
        //pokud existuje klic v promenne $_GET, tak vime ze uzivatel nam neco poslal

        //$_GET je normalni pole, pracujte s tim tak, jak jste zvykli
        $telefon = $_GET["telefon"];
        $jmenoUzivatele = $_GET["jmeno-uzivatele"];
    }

    //je dobre if array key exist pouzit pro name submitu
    //jine inputy mohou mist shodna jmena a stroj by vykonal spatny formular
    if (array_key_exists("schuzka-submit", $_GET)) {
        $telefon = $_GET["telefon"];
        $datumSchuzky = $_GET["datum"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulare</title>
</head>
<body>
    <h1>Formulare</h1>
    <!-- pokud nechame action prazdne, tak se formular bude zpracovat stejny soubor -->
    <form action="" method="GET">
        <label for="kocka">Vase telefoni cislo: </label>
        <!-- jedine, co se posle na server je atribut name="" -->
        <input type="text" name="telefon" id="kocka">
        <br>
        <label for="hroch">Vase jmeno: </label>
        <input type="text" name="jmeno-uzivatele" id="hroch">
        <br>
        <!-- kazdy formular bude mit unikatni name submitu -->
        <input type="submit" name="odber-submit" value="Prihlasit se k odberu SMS">
    </form>

    <hr>

    <form action="" method="GET">
        <label for="slon">Napiste den schuzky</label>
        <input type="text" name="datum" id="slon">
        <br>
        <label for="kachna">Telefon</label>
        <!-- EMMET: input:text -->
        <input type="text" name="telefon" id="kachna">
        <br>
        <!-- kazdy formular bude mit unikatni name submitu -->
        <input type="submit" name="schuzka-submit" value="Domluvit schuzku">
    </form>

</body>
</html>
