<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prirovnavaci operatory</title>
</head>
<body>
  <h1>Prirovnavaci operatory</h1>

  <?php
// +=. -=, *=, /=   tyto operatory meni stav promenne
  $score = rand(0,100);
  var_dump($score);
  //teď chceme k tomu náhodnýmu skore přidat 6 bodu
  $score+=6;
  var_dump($score);
  //alternativni zpusob:
  $score = $score+6;
  var_dump($score);

  //2 specialni operatory ++ a --
  //tyto operatory meni hodnotu o 1 nahoru nebo dolu
  $score++;
  $score++;
  $score++;
  var_dump($score);
  $score--;
  $score--;
  var_dump($score);


  ?>


</body>
</html>
