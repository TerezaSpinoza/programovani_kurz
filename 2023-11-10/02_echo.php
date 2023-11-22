<!DOCTYPE html>
<html lang="en"> <!-- tady nemusim měnit jazyk, protože to je důležitý pro SEO -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Echo</title>
</head>
<body>
  <h1>Echo</h1>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati animi aliquam quae iusto maxime vel vero tempore, fugiat provident sit dolor porro autem. Qui magni eius vel provident, unde quo placeat ipsa modi necessitatibus dolorem fuga ipsum illo sed sint, vero et, dolores non labore facilis nam! Quo, ab. Maiores!</p>

  <h2>Vaše šťastné číslo je: <?php echo rand (100, 666); ?></h2> <!--vnořenej PHP ostrůvek-->

<!-- tady končí HTML :( -->

<?php //tady začíná PHP - nemůžem sem psát HTML ani CSS a takhle vypadá komentář

echo 5 + 5;

echo "<h3>Podnadpis</h3>"; //nemůžeme do PHP bloku psat čisté HTML, ale můžeme pomocí fce echo HTML vygenerovat

//co neechujeme, to se do finálního html nedostane

10 + 10;

?>


</body>
</html>
