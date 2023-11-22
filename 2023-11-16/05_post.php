<?php
  if (array_key_exists("objednavka-submit", $_POST)) {
  //zde můžem nakládat s vyplněnými daty stejne jako v getu
  $info = "Objednavaka byla zaevidovana.";
} 


var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST formular</title>
</head>
<body>
  <h1>POST formular</h1>

  <form action="" method="post">
    <label for="kocka">Jmeno: </label>
    <input type="text" name="jmeno" id="kocka"> 
    <br>
    <label for="pes">Heslo: </label>
    <input type="password" name="heslo" id="pes">
    <br>
    <label for="ryba">Pocet hostu: </label>
    <input type="number" name="pocet-hostu" id="ryba">
    <br>
    <label for="kohout">Vyberete typ pokoje: </label>
    <select name="typ-pokoje" id="kohout">
      <option value="moderni">Moderni</option>
      <option value="rustikal"selected >Rustikal</option> <!-- kdyz dam selected, tak je defaultne vybrany -->
      <option value="relax">Relax</option>
      <option value="dungeon">Dungeon</option>
    </select>
    <br>
    <label for="hroch">Chcete parkovani?</label>
    <label for="hroch">ANO</label>
    <input type="radio" name="parkovani" id="hroch" value="ano">
    <label for="mys">NE</label>
    <input type="radio" name="parkovani" id="mys" value="ne" checked><!-- kdyz dam checked, tak je defaultne vybrany, hodnota value musi byt, aby tam nebyla pokazdy hodnota 'on' -->
    <br>
    <label for="tukan">Zprava</label>
    <textarea name="zprava" id="tukan" cols="30" rows="10"></textarea>
    <br>
    <label for="delfin">Souhlasim s podminkami</label>
    <input type="hidden" name="souhlas" value="nesouhlasim">
    <input type="checkbox" name="souhlas" id="delfin" value = "souhlasim"> <!-- pokud uzivatel checkox nezaskrtne, tak se tento input neposle do serveru-->
    <!--tak tomu dame vlastni value -->
    <!-- da se to obejit pomoci inputu hidden -->
    <br>
    <input type="submit" name="objednavka-submit" value="Odeslat objednavku">


  </form>
  <?php
        if (isset($info)) {
            echo $info;
        }
    ?>

</body>
</html>
