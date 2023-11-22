<?php
if (array_key_exists("cookie-submit", $_POST)) {
  setcookie("souhlas", "ano", time() + 60 * 60 * 24 * 15);
  header("Location: ?");
  exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie lista</title>
</head>
<body>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        /* viewport height */
        height: 400vh;
    }

    .lista {
        position: fixed;
        bottom: 0;
        background-color: bisque;
        width: 100vw;
    }

    </style>
    
    <h1>Cookie lišta</h1>

<?php
if (!array_key_exists("souhlas", $_COOKIE)) {
?>
    <div class="lista">
        <form action="" method="post">
            <label for="">Souhlasite s cookinami?</label>
            <input type="submit" name="cookie-submit" value="Ano, souhlasim.">
        </form>
    </div> 
<?php
}
?>
</body>
</html>
