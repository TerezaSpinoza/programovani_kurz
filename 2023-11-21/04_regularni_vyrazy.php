<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regularni vyrazy</title>
</head>
<body>
    <h1>Regularni vyrazy</h1>
    <?php
    //prvni parametr je regularni vyraz druhy parametr je testovany string
    //vraci to boolean
    //regularni vyraz vzdy obalime do dvou stejnych specialnich znaku
    var_dump(preg_match("#na#", "komnata")); //true
    var_dump(preg_match("#na#", "kocka")); //false
    var_dump(preg_match("#na#", "navrh")); //true
    var_dump(preg_match("#na#", "banana")); //true
    echo "<hr>";

    //ZASTUPNE ZNAKY

    //tecka ., rika ze na jejim miste mu byt libovolny 1 znak
    var_dump(preg_match("#a.a#", "ananas")); //true
    var_dump(preg_match("#a.a#", "anakonda")); //true
    var_dump(preg_match("#a.a#", "komnata")); //true
    var_dump(preg_match("#a.a#", "kocka alza")); //true
    var_dump(preg_match("#a.a#", "panda")); //false

    echo "<hr>";

    //hvezdicka *, rika ze znak, ktery je pred hvezdickou se muze ve stringu objevit 0 az N krat
    var_dump(preg_match("#go*gle#", "ggle")); //true
    var_dump(preg_match("#go*gle#", "gogle")); //true
    var_dump(preg_match("#go*gle#", "google")); //true
    var_dump(preg_match("#go*gle#", "gooogle")); //true
    var_dump(preg_match("#go*gle#", "goooogle")); //true
    var_dump(preg_match("#go*gle#", "gaagle")); //false
    //muzeme zanky kombinovat
    // .* znaemna libovolny znak libovolnekrat
    //toto rika ze mezi g a g muze byt libovlny string znaku
    var_dump(preg_match("#g.*gle#", "gABCgle")); //true

    echo "<hr>";

    //plusko +, rika ze ank, ktery stoji pred pluskem se muze objevit ve stringu 1 az N krat
    var_dump(preg_match("#go+gle#", "ggle")); //false
    var_dump(preg_match("#go+gle#", "gogle")); //true
    var_dump(preg_match("#go+gle#", "google")); //true
    //rikame ze mezi g muze byt libovolny string, ale musi obsahovat alespon 1 znak
    var_dump(preg_match("#g.+gle#", "ggle")); //false
    var_dump(preg_match("#g.+gle#", "gABCgle")); //true

    echo "<hr>";

    //otaznik ?, rika ze znak, ktery je pred otaznikem je nepovinny
    var_dump(preg_match("#eth?anol#", "etanol")); //true
    var_dump(preg_match("#eth?anol#", "ethanol")); //true

    echo "<hr>";

    //chlupate zavorky {} urcuji koukrat se znak, ktery je pre chlupatyma zavorkama muze ve stirngu vyskytnout
    var_dump(preg_match("#go{2,5}gle#", "ggle")); //false
    var_dump(preg_match("#go{2,5}gle#", "gogle")); //false
    var_dump(preg_match("#go{2,5}gle#", "google")); //true
    var_dump(preg_match("#go{2,5}gle#", "gooogle")); //true
    var_dump(preg_match("#go{2,5}gle#", "goooogle")); //true
    var_dump(preg_match("#go{2,5}gle#", "gooooogle")); //true
    var_dump(preg_match("#go{2,5}gle#", "goooooogle")); //false
    //je mozne uvest pouze jedno cislo
    var_dump(preg_match("#g.{2}gle#", "ggle")); //false
    var_dump(preg_match("#g.{2}gle#", "gAgle")); //false
    var_dump(preg_match("#g.{2}gle#", "gABgle")); //true
    var_dump(preg_match("#g.{2}gle#", "gABCgle")); //false

    echo "<hr>";

    //pajpa | rika, že string musi obsahovat vyraz vlevo nebo vpravo
    var_dump(preg_match("#amo|bov#", "kocka")); //false
    var_dump(preg_match("#amo|bov#", "programovani")); //true
    var_dump(preg_match("#amo|bov#", "webovky")); //true
    var_dump(preg_match("#amo|bov#", "programovani webovek")); //true

    //FIXACNI ZNAKY

    echo "<hr>";
    // striska ^ rika, že stirng musi danym textem zacit
    var_dump(preg_match("#^teta#", "teta")); //true
    var_dump(preg_match("#^teta#", "tetanus")); //true
    var_dump(preg_match("#^teta#", "prateta")); //false

    echo "<hr>";

    //dolar $ rika, že stirng musi danym textem skocit
    var_dump(preg_match("#teta$#", "teta")); //true
    var_dump(preg_match("#teta$#", "tetanus")); //false
    var_dump(preg_match("#teta$#", "prateta")); //true

    //pokud neni regularni vyraz zafixovany, tak muze na zacatku a na konci byt libovolny stirng znaku
    var_dump(preg_match("#go{2,5}gle#", "ABCgoogleDEF")); //true
    var_dump(preg_match("#^go{2,5}gle$#", "ABCgoogleDEF")); //false

    echo "<hr>";
    //SESKUPOVACI ZNAKY
    //kulate zavorky () seskupi string dohormady, abychom je mohli nakombinovat s jinym regularnimy znaky
    //otaznik normalne ovlivnuje jen 1 znak pred otaznikem, ale kulatyma zavorkama jsme rekli ze otaznik se vztahuje na cele slovo "pro"
    var_dump(preg_match("#^iphone (pro )?12$#", "iphone 12")); //true
    var_dump(preg_match("#^iphone (pro )?12$#", "iphone pro 12")); //true
    var_dump(preg_match("#^iphone (pro )?12$#", "iphone max 12")); //false
    var_dump(preg_match("#^iphone (pro )?12$#", "iphone p 12")); //false

    echo "<hr>";

    //hranate zavorky rikaji, jake znaky lze pouzit
    var_dump(preg_match("#go[efg]gle#", "google")); //false
    //tato hranata zavorka nam rika, ze muzeme pouzit jennom pismeno e nebo f nebo g
    var_dump(preg_match("#go[efg]gle#", "goegle")); //true
    var_dump(preg_match("#go[efg]gle#", "gofgle")); //true
    var_dump(preg_match("#go[efg]gle#", "goggle")); //true
    var_dump(preg_match("#^iphone 1[2345]$#", "iphone 11")); //false
    var_dump(preg_match("#^iphone 1[2345]$#", "iphone 12")); //true
    var_dump(preg_match("#^iphone 1[2345]$#", "iphone 13")); //true
    var_dump(preg_match("#^iphone 1[2345]$#", "iphone 14")); //true
    var_dump(preg_match("#^iphone 1[2345]$#", "iphone 15")); //true
    var_dump(preg_match("#^iphone 1[2345]$#", "iphone 16")); //false
    //muzeme kombinovat
    var_dump(preg_match("#^iphone [2345]{2}$#", "iphone 12")); //false
    var_dump(preg_match("#^iphone [2345]{2}$#", "iphone 53")); //true
    var_dump(preg_match("#^iphone [2345]{2}$#", "iphone 22")); //true
    var_dump(preg_match("#^iphone [2345]{2}$#", "iphone 43")); //true
    var_dump(preg_match("#^iphone [2345]{2}$#", "iphone 11")); //false
    var_dump(preg_match("#^iphone [2345]{2}$#", "iphone 51")); //false
    echo "<hr>";

    //pomlcka - udava rozsah moznosti v [] zavorkach
    var_dump(preg_match("#^iphone 1[2-5]$#", "iphone 11")); //false
    var_dump(preg_match("#^iphone 1[2-5]$#", "iphone 12")); //true
    var_dump(preg_match("#^iphone 1[2-5]$#", "iphone 13")); //true
    var_dump(preg_match("#^iphone 1[2-5]$#", "iphone 14")); //true
    var_dump(preg_match("#^iphone 1[2-5]$#", "iphone 15")); //true
    var_dump(preg_match("#^iphone 1[2-5]$#", "iphone 16")); //false
    //je monzne to aplikovat na pismena
    //[a-f] rika ze muzeme pouzit abcdef
    var_dump(preg_match("#go[a-f]gle#", "goagle")); //true
    //poznamka chcem povilit mala velka pismena bez diakritiky bez cisel
    //[a-zA-Zěščřžýáíé] píšeme za sebou a když dia, tak vypsat diakritiku

    //ESCAPOVANI
    //nektere znaky chcem vyjadrit textove, tak je musime oescapovat
    //zde napriklad escapujeme tecku
    var_dump(preg_match("#.+\.cz$#", "seznam.cz")); //true
    var_dump(preg_match("#.+\.cz$#", "primakurzy.cz")); //true


    ?>
</body>
</html>
