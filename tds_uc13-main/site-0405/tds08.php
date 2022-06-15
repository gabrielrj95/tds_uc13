<?php

$array1 = array(100, 200, 300);
$array2 = [10, 20, 33];

echo $array1[0];
echo "<br>";
echo $array2[0];

echo "<br>";

var_dump($array1);
echo "<br>";
print_r($array2);
echo "<br>";
echo "<br>";

$array1[3] = 500;
var_dump($array1);

echo "<br>";

$array[] = 900;
var_dump($array1);
echo "<br>";

unset($array1[1]);
var_dump($array1);
$array1[] = 900;
$array1[] = 1000;
echo "<br>";

echo "Tamanho" . " " . sizeof($array1);
echo "<br>";
echo "Tamanho" . " " . count($array1);
echo "<br>" . "<br>";
print_r($array1);
?>