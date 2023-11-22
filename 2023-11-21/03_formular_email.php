<?php
//zpracujeme formular
if (array_key_exists("email-submit", $_POST)) {
    $adresat = $_POST["adresat"];
    $odesilatel = $_POST["odesilatel"];
    $predmet = $_POST["predmet"];
    $zprava = $_POST["zprava"];

    mb_send_mail($adresat, $predmet, $zprava, array("From" => "Policie <$odesilatel>") ); //mb multibyte
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular email</title>
</head>
<body>
    <h1>Formular Email</h1>

    <form action="" method="post">
        <label for="">Adresat</label>
        <input type="email" name="adresat" id="">
        <br>
        <label for="">Odesilatel</label>
        <input type="email" name="odesilatel" id="">
        <br>
        <label for="">Predmet</label>
        <input type="text" name="predmet" id="">
        <br>
        <label for="">Zprava</label>
        <textarea name="zprava" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="email-submit" value="Odeslat email">
    </form>

</body>
</html>
