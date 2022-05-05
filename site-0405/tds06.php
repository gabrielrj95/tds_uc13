<?php
$c = "";
if ($c == ""){
    echo "C está vazio";
    echo"<br>";
}

if ($c == NULL){
    echo "C é NULL";
    echo"<br>";
}

if (empty($c)){
    echo "C está vazio";
    echo"<br>";
}

if (empty(trim($c))){
    echo "TRIM C está vazio";
    echo"<br>";
}

?>