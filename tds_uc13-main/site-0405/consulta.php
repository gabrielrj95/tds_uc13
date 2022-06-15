<?php

$con = new PDO("mysql:host=localhost;dbname=ponto_eletronico", "root", "");

$rs = $con->query("SELECT id, no_matricula, nome, sobrenome FROM empregado");
//rs = resultset

$rs->execute();
//executa no banco.

$dados = $rs->fetchAll();
//fetchAll = "busca dado" e traz as informações do banco.
foreach($dados as $item){
    echo $item['0']."<br>";
    echo $item['no_matricula']."<br>";
    echo $item['nome']."<br>";
    echo $item['sobrenome']."<br>";
}
?>