<?php
$barvaNadpisu = "black";
if (array_key_exists("barva-submit", $_POST)) {
$kodBarvy = $_POST["barva"];
//chceme vytvorit cookie, kt se bude jmenovat "mojeBarva", jeji hodnota bude $kodBarvy a exp. bude za 10 dni
setcookie("mojeBarva", $kodBarvy, time() + 60*60*24*10);
//hned, jak rekneme klinetovi, aby nastavil cookinu barvy, tak ho prinutimestranku aktualizovat
//fce header presmeruje uzivatele na jinou stranku
//pokud misto adresy napiseme jen "?", tak se uzivatel presmeruje na stejnou stranku
// header("Location: https://google.com");
header("Location: ?");
//po tom presmerovani se tam dava exit, abychom ukoncili odpoved serveru
exit; //nemusime generovat zbytek stranky, protoze vime, ze ho presmerujem jinam
}


if (array_key_exists("mojeBarva", $_COOKIE)) {
  $barvaNadpisu = $_COOKIE["mojeBarva"];
}
var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie - nadpis</title>
</head>
<body>

<h1>Cookie nadpis</h1>
<style>
        h1 {
            color: <?php echo $barvaNadpisu; ?>;
        }
    </style>
<form action="" method="post">
    <label for="kocka"></label>
    <input type="color" name="barva" id="kocka">
    <input type="submit" name="barva-submit" value="Nastav mi barvu nadpisu">
</form>

</body>
</html>
