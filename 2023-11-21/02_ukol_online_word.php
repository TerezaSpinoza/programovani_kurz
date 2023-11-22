<?php
$obsahSouboru = "";

if (array_key_exists("text-submit", $_POST)) {
    $text = $_POST["text"];
    file_put_contents("./dokument.txt", $text);
}

if (file_exists("./dokument.txt")) {
    //text ktery precteme ze souboru abudeme ho chti vypsat do stranky, tka je treba osetrit aby se nevypstaly nebezpecne znaky
    //k tomu nam slouzi funkce htmlscpecialchars
    $obsahSouboru = htmlspecialchars(file_get_contents("./dokument.txt"));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online word editor</title>
</head>
<body>
    <h1>Online word editor</h1>

    <form action="" method="post">
        <label for="kocka">Vas text: </label>
        <textarea name="text" id="kocka" cols="30" rows="10"><?php echo $obsahSouboru; ?></textarea>
        <input type="submit" name="text-submit" value="Ulozit stav souboru">
    </form>

  <!-- toto je script ktery pripoji zdorjove kody nekoho ciziho -->
  <!-- timto odkazem jsme si pripojili knihovnu TinyMCE pro wysiwyg-->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script> //toto jsou tagy, ktery nam rikaji, ze se jednaja o JavaScript
  //toto jsou tagy ktere rikaji ze se ted jedna o JS kod
  tinymce.init({
            selector: "#kocka"
        });
</script>





  </body>
</html>
