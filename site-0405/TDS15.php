<?php

$estados = "parana;rio grande;santa catarina";
echo "$estados";
echo "<br>";
$array_estados = explode(";", $estados);
echo "<pre>";
print_r($array_estados);
echo "<pre>";

?>