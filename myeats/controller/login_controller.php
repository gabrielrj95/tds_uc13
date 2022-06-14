<?php
    require_once "../model/login_model.php";

    $acao = $_GET["acao"];

    if($acao == "login"){
        if(isset($_POST["email"]) && isset($_POST["password"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
        }
        else {
            $email = null;
            $password = null;
        }
    
        $loginModel = new loginModel(); //new cria(instancia) o objeto
        $passwordCripto = sha1($password);
        $resultado = $loginModel -> login($email, $passwordCripto); // -> chamando a função login
    
        if ($resultado == true) {
            session_start();
            $_SESSION["logado"] = true;
            header("Location: ../view/home-myeats.php");
        } else {
            echo "Usuário ou senha inválido";
        }
        
    }  
    else if($acao == "logout") {
        unset($_SESSION["logado"]);
        header("Location: ../view/login_view.php");
    }
    






?>