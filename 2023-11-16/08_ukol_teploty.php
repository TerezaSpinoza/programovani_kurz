<?php
$stupneC = 0;
$stupneF = 32;

//toto jsou anse funkce ktere umi prevadet
function prevedCNaF($argC) {
    $f = $argC * 1.8 + 32;
    return $f;
}

function prevedFNaC($argF) {
    $c = ($argF - 32) / 1.8;
    return $c;
}


//toto jsou idy ktery zpracovavaji formular
if (array_key_exists("cNaF-submit", $_POST)) {
    //vytahneme si z formulare hhodnotu C
    $stupneC = $_POST["stupne-c"];
    //vypocitame pomoci hodnoty C hodnotu F
    $stupneF = prevedCNaF($stupneC);
}

if (array_key_exists("fNaC-submit", $_POST)) {
    //provedem to same jen obracene pro F->C
    $stupneF = $_POST["stupne-f"];
    $stupneC = prevedFNaC($stupneF);
}

var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular teploty</title>
</head>
<body>
    <h1>Formular teploty</h1>

    <form action="" method="post">
        <label for="kocka">Stupne C: </label>
        <input type="text" name="stupne-c" id="kocka" value="<?php echo $stupneC; ?>">
        <label for="pes">Stupne F: </label>
        <input type="text" name="stupne-f" id="pes" value="<?php echo $stupneF; ?>">
        <hr>
        <input type="submit" name="cNaF-submit" value="Preved C -> F">
        <input type="submit" name="fNaC-submit" value="Preved F -> C">
    </form>

</body>
</html>
