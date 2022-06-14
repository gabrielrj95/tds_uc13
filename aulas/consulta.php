<?php

$con = new PDO("mysql:host=localhost;dbname=ponto_eletronico","root",""); //conexão
$rs = $con->query("SELECT id, no_matricula, nome, sobrenome FROM empregado"); //cria a query

$rs->execute(); // executa o query

$dados = $rs->fetchAll(); //traz os dados do banco

foreach($dados as $item) {
    echo $item[0]."<br>";
    echo $item["no_matricula"]."<br>";
    echo $item["nome"]."<br>";
    echo $item["sobrenome"]."<br>";
}



$con = null;
?>