<?php
  if (array_key_exists("obvod", $_POST)) {
  $polomer = $_post ["polomer"];
  $obvod = 2 * pi() * $polomer;
 
}

var_dump($_POST);
?>
<!-- uzivatel si zada do formulare nejaky polomer a klikne na tlacitko spocitej obvod -->
<!-- vypise se vysledek do stranky ve tvaru: "Kruh s polomerem xxx ma obvod yyy." -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Obvod kruhu</title>
</head>
<body>
  <h1>Obvod kruhu</h1>
<form action="" method="POST">
  <label for="pes">Zadej polomer kruhu</label>
  <input type="float" name="polomer" id="pes">
  <input type="submit" name="obvod" value="spocitej obvod">
</form>

<?php
if (isset($obvod)) {
    echo "Obvod kruhu s poloměrem $polomer je $obvod.";
}
?>

</body>
</html>
