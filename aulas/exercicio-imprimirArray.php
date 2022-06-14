<?php

$dados[] = array("nome" => "Maria", "data_nasc" => "10/05/1985", "salario" => 2500, "cod_cargo" => 3);
$dados[] = array("nome" => "Joao", "data_nasc" => "01/01/1983", "salario" => 1500, "cod_cargo" => 1);
$dados[] = array("nome" => "Pedro", "data_nasc" => "15/11/1984", "salario" => 4500, "cod_cargo" => 4);
$dados[] = array("nome" => "Carla", "data_nasc" => "25/03/1994", "salario" => 1500, "cod_cargo" => 1);


for ($i=0; $i < count($dados); $i++) {
    
    if($dados[$i]["cod_cargo"] === 1) {
        $novoSalario = $dados[$i]["salario"] * 1.1;  
        $dados[$i]["salario"] = $novoSalario;
    } else {

    }
}

for ($i=0; $i < count($dados); $i++) {
    echo "<pre>";
    echo "----------------------";
    echo "<br>";
    echo "Nome: ".$dados[$i]["nome"];
    echo "<br>";
    echo "Data de Nascimento: ".$dados[$i]["data_nasc"];
    echo "<br>";
    echo "Salário: ".$dados[$i]["salario"];
    echo "<br>";
    echo "Código do Cargo: ".$dados[$i]["cod_cargo"];
    echo "<br>";
    echo "----------------------";
    echo "<br>";
    echo "<pre>";
}
?>