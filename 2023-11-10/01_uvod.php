<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>nadpis</h1><!-- v php souboru muzeme psat html tak, jak jsme byli zvykli -->
    <h2><!-- h2>div>lorem -->
      <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta earum quis laudantium iste quisquam ducimus tempora impedit maxime corrupti quasi, sunt minima eaque libero ex, atque repellendus, ipsa enim corporis.</div>
    </h2>
<div class="kocka"><!-- div.kocka>p.mys -->
  <p class="mys"></p>
</div>
div>p>lorem <!-- když mi zmizí emmet, tak CTRL + Mezerník a odentruju -->

<h3 id="fixa"></h3> <!-- h3#fixa -->
<div class="praha" id="primakurzy"></div> <!-- div.praha#primakurzy -->
<div class="papousek tukan"></div> <!-- div.papusek.tukan -> 2 classy rovnou v 1 uvozovkách --> 

<!-- div.produkt*6 -->
<div class="produkt"></div>
<div class="produkt"></div>
<div class="produkt sleva"></div>
<div class="produkt"></div>
<div class="produkt sleva"></div> <!-- kočkomyš -->
<div class="produkt"></div>

<!-- stylování slevněnejch produktů, všechny mají béžovou, zlevněný mají červenou -->
<style>
  .produkt {
    width: 20px;
    height: 40px;
    background-color: bisque;
  }
  .produkt.sleva {
    background-color: red;
  }
</style>
<!-- .kocka .mys = styluju myši v kočce -->
<!-- .kocka,.mys = styluju myši a zároveň kočky -->
<!-- .kocka.mys = styluju kočkomyši  jako je v "produkt sleva"-->

<!-- CSS selectory -->
<style>
        /* toto jsou vsechny mysi */
        .mys {
            background-color: green;
        }
        /* !!!!! jen ty mysi, co jsou uvnitr kocky */
        .kocka .mys {
            background-color: green;
        }
        /* !!!!! jenom kockomysi */
         .kocka.mys {
            background-color: green;
        }
        /* vsechny kocky, mysi a kockomysi */
        .kocka,.mys {
            background-color: green;
        }
    </style>

</body>
</html>
