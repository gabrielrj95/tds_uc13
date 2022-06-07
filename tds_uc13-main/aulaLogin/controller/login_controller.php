<?php
    require_once "../model/login_model.php";
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $loginModel = new loginModel(); //new cria(instancia) o objeto
    $loginModel -> create($email, $password); // -> chamando a função create


?>