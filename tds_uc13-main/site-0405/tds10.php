<?php
/*
$array3 = array("nome" => "Maria", "idade" => "40");

var_dump($array3);
echo "<br>";

echo $array3['nome'];

//Utilizando a sintaxe curta

$array4 = [
    "nome" => "José",
    "idade" => "50",
];

$array4[0] = "Pedro";

print_r($array4);
echo "<br>" . "<br>";

//Maneira não organizada de realizar 
$a1 [][] = array();
$a1 [0][0] = "Pedro";
$a1 [0][1] = "pedro@senac.com.br";
$a1 [0][2] = 21;
$a1 [1][0] = "Marcia";
$a1 [1][1] = "maria@senac.com.br";
$a1 [1][2] = 36;

echo "<pre>";

print_r($a1);

echo "</pre>";
echo "<br>" . "<br>";
*/

$a2[0]["Nome"] = "Maria";
$a2[0]["Sobrenome"] = "Silva";
$a2[0]["Email"] = "maria@senac";
echo "<br>" . "<br>";

$a2[1]["Nome"] = "Pedro";
$a2[1]["Sobrenome"] = "Souza";
$a2[1]["Email"] = "pedro@senac";
echo "<br>" . "<br>";

$a2[2]["Nome"] = "Carol";
$a2[2]["Sobrenome"] = "Aranha";
$a2[2]["Email"] = "carol@senac";

for($i = 0; $i < count($a2); $i++){
    echo $a2[$i]["Nome"] . ": " . $a2[$i]["Sobrenome"] . " - " . $a2[$i]["Email"];
    echo "<br>";
}
?>