<?php
session_start(); //toto je fce, ktera spusti system session na serveru. Automaticky prideli kazdemu uzivateli cookinu SESSID a vytvori mu prostor na serveru
//SESSID se smaze po zavreni prohlizece (ne jen zalozky)
//session_start musi byt zavolany driv nez html (stejne jako setcookie, header)

//zpracovani prihl. udaju
if (array_key_exists("login-submit", $_POST)) {
  $zadaneJmeno = $_POST["jmeno"];
  $zadaneHeslo = $_POST["heslo"];

  //spravne udaje by byly v DB, kterou ale nemame, tak dame natvrdo tony a cici123
  if ($zadaneJmeno == "tony" && $zadaneHeslo == "cici123") {//zadal spravny udaje
  $_SESSION["jePrihlasen"] = true; //vytvorime si hodnotu, podle ktere pozname, jestli je uzivatel prihlasen nebo ne
  }
}
if (array_key_exists("logout-submit", $_GET)) {
  //smazeme z jeho krabicky session klic a hodnotu "jePrihlasen"
  //tim ho ze systemu odhlasime (sessiona zustane)
  unset($_SESSION["jePrihlasen"]);
  //pokud nevycistim URL, zustane nam tam 05_session.php?logout-submit=Odhlasit+se
  header("Location: ?");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>

<body>
  <h1>Session</h1>
  
  <?php
    if (array_key_exists("jePrihlasen", $_SESSION)) {
        echo "<h2>Vitejte!!!</h2>";
        ?>
        <!-- odhlasovani pomoci form -->
            <form action="" method="get">
                <input type="submit" name="logout-submit" value="Odhlasit se">
            </form>
        <!-- odhlasovani pomoci odkazu - proto je to delany GETem, aby to slo lip stylovat-->
        <a href="?logout-submit">Odkaz pro odhlaseni</a>
        <?php
    }else{
        ?>
        <form action="" method="post">
            <label for="hroch">Uzivatelske jmeno: </label>
            <input type="text" name="jmeno" id="hroch">
            <label for="tukan">Uzivatelske heslo: </label>
            <input type="password" name="heslo" id="tukan">

            <input type="submit" name="login-submit" value="Prihlasit se">
        </form>
        <?php
    }
    ?>

    </body>
</html>
