<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Přeskočení přerušení</title>
</head>
<h1>Přeskočení přerušení</h1>
<body>

  <?php

//Vypsat čísla 1-20
  for ($i = 1; $i < 21; $i++) { 
    echo "$i <br>";
  }
echo "<hr>";
//Přeskočení cyklu - někdy nechceme provádět celé tělo cyklu v {} --> {tělo cyklu}
for ($i = 1; $i < 21; $i++) { 
  if ($i%3 == 0) { //pokud je číslo dělitelné 3, tak zavoláme podmínku continue a jede dál
    continue;
    
  }
echo "$i <br>";
}
echo "<hr>";

//přerušení cyklu
for ($i=0; true; $i = rand(0,100)) {
  echo "$i <br>";
  if ($i == 42) {
    break;
  }
}

?>
</body>
</html>
