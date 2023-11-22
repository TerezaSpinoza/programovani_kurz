<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prace se soubory</title>
</head>
<body>
    <h1>Prace se soubory</h1>

    <?php
    //file_exists je funkce ktera zjisti zda soubor nebo slozka existuje, vraci boolean
    var_dump(file_exists("./kocky/cici.img")); //false, soubor neexistuje
    
    //vytvorime novou slozku, pokud slozka uz existuje, tak funkce vyhodi chybu
    //musime tedy nejprve zkontorlovat pomoci funkce file_exists
    if (file_exists("./moje-soubory")) {
        echo "Slozka moje-souboru uz existuje.<br>";
    }else {
        //mkdir (make directory) je funkce ktera vytvori novou slozku
        mkdir("./moje-soubory");
        echo "Slozka moje-soubory byla uspesne vytvorena.<br>";
    }

    //pro vytvoreni noveho souboru se pouziva funkce file_put_contents
    //stejna funkce sepouziva i pro editovani exisutjiciho souboru
    file_put_contents("./moje-soubory/emaily.txt", "tonda.truong@seznam.cz");
    //pokud fci zavolam znovu, tak se nahradi obsah 
    file_put_contents("./moje-soubory/emaily.txt", "jakub.novotny@seznam.cz");
    //pokud chceme pridat obsah ke stavajicimu obsahu bez nahrazeni, tak musime pridat treti parametr
    file_put_contents("./moje-soubory/emaily.txt", "\n", FILE_APPEND); //new line
    file_put_contents("./moje-soubory/emaily.txt", "josef.kyrian@primakurzy.cz", FILE_APPEND);

    //cteni obsahu souboru
    $stringObsahSouboru = file_get_contents("./moje-soubory/emaily.txt");
    var_dump($stringObsahSouboru);
    
    //chceme to vypsat jako ul seznam, potrebovali bychom ty emaily mit jako pole
    //explodneme to podle noveho radku \n
    $poleEmailu = explode("\n", $stringObsahSouboru);
    var_dump($poleEmailu);

    echo "<ul>";
    foreach($poleEmailu AS $email) {
        echo "<li>$email</li>";
    }
    echo "</ul>";

    //ted se naucime scanovat slozku a zjistit, co vsechno v ni je
    file_put_contents("./moje-soubory/zviratka.txt", "");
    if (!file_exists("./moje-soubory/obrazky")) {
      mkdir("./moje-soubory/obrazky");
    }
    //v nasi slozce moje soubory jsou ted 3 polozky: obrazky(slozka), soubor emaily a soubor zviratka
    //scandir();
    $poleNazvuPolozek = scandir("./moje-soubory");
    var_dump($poleNazvuPolozek);

    //vypiste soubory a slozky do ul seznamu a navic napiste do zavorky zda je se jedna o soubor nebo slozku
    echo "<ul>";
    foreach($poleNazvuPolozek AS $nazevPolozky) {
        if ($nazevPolozky == "." || $nazevPolozky == "..") {
            continue;
        }

        //is_dir a is_file jsou funkce ktere zjsiti zda cesta je soubor nebo slozky
        if (is_dir("./moje-soubory/$nazevPolozky")) {
            echo "<li>$nazevPolozky (slozka)</li>";
        }else if (is_file("./moje-soubory/$nazevPolozky")) {
            echo "<li>$nazevPolozky (soubor)</li>";
        }
        
    }
    echo "</ul>";

    ?>
</body>
</html>
