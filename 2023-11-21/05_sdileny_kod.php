<?php
    //require_once pripoji soubor jen jednou - kterej trouba by to takhle delal
    require_once "./funkcionalita.php";
    require_once "./funkcionalita.php";
    require_once "./funkcionalita.php";
    require_once "./funkcionalita.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sdileni kodu</title>
</head>
<body>
    <h1>Sdileny kod</h1>

    <!-- zde chci mit menu -->
    <?php
    require "./menu.php";
    ?>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, placeat. Blanditiis, praesentium quos facere rerum aspernatur, veniam autem quisquam magni doloremque ipsa, iure obcaecati tempora atque voluptates sed eaque temporibus.</p>


    <!-- zde chci mi to same menu znovu -->

    <?php
    require "./menu.php";
    ?>
</body>
</html>
