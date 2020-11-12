<?php
$test1 = 10;
$test2 = 6;
if($test1 != $test2) {
    echo "<br>";
    echo "ongelijk";
}
$test1 = 10;
$test2 = 10;
if($test1 === $test2) {
    echo "<br>";
    echo "indentiek";
}
$test1 = 13;
$test2 = 12;
if($test1 > $test2) {
    echo "<br>";
    echo "test1 is groter dan test2";
}
$test1 = 10;
$test2 = 6;
if($test1 >= $test2) {
    echo "<br>";
    echo "test1 is groter of gelijk aan test2";
}
?>