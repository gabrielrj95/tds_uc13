<?php
    require_once "../model/user_model.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confSenha = $_POST["confSenha"];

    $userModel = new UserModel(); //new cria(instancia) o objeto
    $userModel -> create($name, $email, $address, $password); // -> chamando a função create


?>