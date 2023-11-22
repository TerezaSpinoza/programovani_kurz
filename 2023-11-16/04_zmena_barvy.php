<?php

//overime zda byl odeslal formular
if (array_key_exists("barva-nadpisu-submit", $_GET)) {

    $barvaNadpisu = $_GET["barva-nadpisu"];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmena barvy</title>
</head>
<body>
    <style>
        h1 {
            color: <?php echo $barvaNadpisu; ?>;
        }
    </style>

    

    <h1>Zmena barvy</h1>

    <!-- EMMET: form:get -->
    <form action="" method="get">
        <label for="kocka">Napiste barvu: </label>
        <input type="text" name="barva-nadpisu" id="kocka">
        <br>
        <input type="submit" name="barva-nadpisu-submit" value="Zmen barvu nadpisu">
    </form>
    <br>
    
    <!-- toto je odkaz, ktery simuluje odeslani formulare typu get s hpdnotou lightgreen -->
    <a href="?barva-nadpisu-submit&barva-nadpisu=lightgreen">Pro zmenu barvy na světle zelenou, klikni SEM</a>
    <br>
    
    <?php 

        //mate 3 zpusoby, jak se vyhnout chybe, kdy promenna neexistuje, protoze formualr jeste nebyl odeslan (stava se to pri prvni navsteve webu)
        //1) zjistete, zda formular byl odeslany pomoci array_key_exists 
        //2) pomoci funkce isset zjistete, zda promenna existuje
        //3) na zacatku souboru promennou vytvorte a dejte ji nejakou vychozi hodnotu



        //funkce isset zjsiti zda promenna existuje, vraci boolean
        //pokud promennea neexistuje taka ji nemuzeme pouzit, jinak bychom dostali chybu
        if (isset($barvaNadpisu)) {
            echo "Vybrali jste si barvu: $barvaNadpisu";
        }
    ?>
</body>
</html>
