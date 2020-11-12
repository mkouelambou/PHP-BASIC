<?php
$x = 75;
$y = 25;

if ($x == 75 && $y = 25) {
    echo "beide waardes zijn waar". "<br>";
}else {
    echo "beide waardes zijn niet waar". "<br>";
}

$x = 75;
$y = 25;

if ($x == 75 || $y = 20) {
    echo "een of beide waardes zijn waar". "<br>";
}else {
    echo "geen van beide waardes is waar". "<br>";
}

$x = 75;
$y = 25;

if ($x == 75 xor $y = 20) {
    echo "een van de twee waardes is waar maar niet beide". "<br>";
}else {
    echo "geen van de twee waardes is waar". "<br>";
}

$x = 75;

if ($x !== 60) {
    echo "de vergelijking is niet waar". "<br>";
}else {
    echo "de vergelijking is waar". "<br>";
}
?>