<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
  </head>
  <body>
    <form action="index.php" method="get"><!-- dit laten staan! -->
    <a href="producten.php">producten</a>
    <p>Op deze website kun je checken welk datatype je hebt ingevoerd.</p>
    <p>Vul hieronder een getal, een decimaal, een tekst of de tekst true/false in en klik op check!</p> 
    <input type="text" name="input"><!-- dit laten staan! -->
    <button type="submit" name="submit">Check</button><!-- dit laten staan! -->
    <p>Het datatype van de waarde: <?php getInput(); ?> is </p>

    </form><!-- dit laten staan! -->
  </body>
</html>
