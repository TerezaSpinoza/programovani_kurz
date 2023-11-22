<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cyklus For</title>
</head>
<h1>Cyklus For</h1>
<body>

  <?php
    //cyklus while a cyklus for je to same, jen se to zapisuje jinak
    //cyklus se sklada ze 3 casti
    //1) startovaci hodnota
    //2) podminka
    //3) opakovany vyraz
    //pro for cyklus se vse pise do () zavorek

    //1) na zacatku cyklsu storj vytvori startovaci hodnotu (toto vykona jen 1x za cely cyklus)
    //2) zkontroluje zda podminka vysla true, pokud vysla false cyklus konci
    //3) pokud podminka vysla true, vykona se telo cyklu
    //4) po vykonani tela cyklu se provede opakovany vyraz
    //5) po vykonani opakovaneho vyrazu se program vraci zpatky na krok 2)

//Cyklus For je stejnej, jen se jinak zapisuje 
  for ($i = 0; $i < 10; $i++) { //(starovací hodnota; ukončení cyklu; inkrementace/dekrementace,nebo nic)
    echo "<li>hovno - $i</li>";

  }


?>
</body>
</html>
