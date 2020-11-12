<?php
$prod_besteld = 12;
echo $prod_besteld = 1.50;
echo "<br>";
echo $prod_besteld = 1.25;
echo "<br>";
echo $prod_besteld = 1.00;
echo "<br>";
if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}
?>