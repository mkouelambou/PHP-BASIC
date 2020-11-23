<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
  </head>
  <body>
    <form action="producten.php" method="get"><!-- dit laten staan! -->

    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
        <table>
            <tr>
                <th>productnummer</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <tr>
                <td>0</td>
                <td>appels</td>
                <td>0,25</td>
            </tr>
            <tr>
                <td>1</td>
                <td>peren</td>
                <td>0,30</td>
            </tr>
            <tr>
                <td>2</td>
                <td>bananen</td>
                <td>0,80</td>
          </tr>
          <tr>
                <td>3</td>
                <td>mango's</td>
                <td>0,95</td>
        </tr>
        <tr>
                <td>4</td>
                <td>druiven</td>
                <td>1,25</td>
        </tr>
        <tr>
                <td>5</td>
                <td>melk</td>
                <td>0,75</td>  
        </tr>
        <tr>
                <td>6</td>
                <td>kaas</td>
                <td>1,50</td> 
        </tr>
        <tr>
                <td>7</td>
                <td>bloemkool</td>
                <td>1,75</td>
        </tr>
        <tr>
                <td>8</td>
                <td>tomaat</td>
                <td>1,10</td>
        </tr>
        <tr>
                <td>9</td>
                <td>sla</td>
                <td>2,00</td>
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je:</p>
    <p>je bent <?php getAge(); ?> je korting is: </p>

    </form><!-- dit laten staan! -->
  </body>
</html>
