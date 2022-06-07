<?php
    require_once "../model/cadastro_model.php";

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $address = $_POST["address"];
    $cep = $_POST["cep"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $cadastroModel = new cadastroModel(); //new cria(instancia) o objeto
    $cadastroModel -> create($name, $surname, $address, $cep, $email, $password); // -> chamando a função create


?>