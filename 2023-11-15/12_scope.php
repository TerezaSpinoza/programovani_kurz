<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope promenne</title>
</head>
<body>
    <h1>Scope promenne</h1>
    <?php
        //scope je dosah/rozsah/platnost promenne

        //tato promenna existuje v celem souboru od radky 14 a dal
        $oblibenaBarva = "zelena";

        //zde muzu promenou pouzit
        echo $oblibenaBarva;
        echo "<br>";

        //vetsinou nemusime scope moc resit, vyjimka je funkce
        //vsehcny promnne ktere vzniknou uvnitr funkce, tak nemohou byt pouzity mimo funkci
        function vypisTony () {
            //uvnitr funkce nemuzeme pouzit promenne, ktere jsou deifnovane mimo funkci
            //toto vyhodi chybu, nemuzeme pouzit promennou ktera byla nadefinovana venku
            //jediny zpusob jak do funkce dostat enjaky data je skrz argumenty
            //echo $oblibenaBarva;

            //scope teto promenne $jmeno je dana funkce
            $jmeno = "Tony";
            //zde ji muzu pouzit
            echo $jmeno;
        }

        //toto vyhodi chybu
        //program rekne ze tato promenna neexistuje
        //echo $jmeno;
    ?>

    <hr>
    <h2>Podnadpis</h2>

    <?php
        //zde ji muzu tkay pouzit ikdyz je to uplne novy php blok
        echo $oblibenaBarva;
        echo "<br>";
    ?>
</body>
</html>
