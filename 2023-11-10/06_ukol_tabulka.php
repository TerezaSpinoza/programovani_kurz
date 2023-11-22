<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabulka</title>
</head>
<body>

<?php
  $pohlavi = "F"; $vek = rand(1, 99);
?>
  <h1>Tabulka</h1>
  <table border=1px solid>
    <tr>
      <td>Věk</td>
       <td><?php echo $vek;?></td> <!--tady nebudu používat uvozovky-->
    </tr>
    <tr>
      <td>Pohlaví</td>
      <td><?php echo $pohlavi;?></td>
    </tr>
  </table>



</body>
</html>
