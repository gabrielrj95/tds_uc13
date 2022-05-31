<?php
    require_once "../model/login_model.php";
    

    if(isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
    }
    else {
        $email = null;
        $password = null;
    }

    $loginModel = new loginModel(); //new cria(instancia) o objeto
    $password_cripto = sha1($password);
    $resultado = $loginModel -> login($email, $password_cripto); // -> chamando a função create

    if($resultado == true){
        session_start();
        $_SESSION["logado"] = true;
        header("location:../view/home.php");
    }else{
        echo "Usuário/senha inválida";
    }

/* função "HEADER" Podemos usar a função header() com a string de cabeçalho location: em PHP. 
A string de cabeçalho redireciona a página da web para o local especificado. 
Geralmente é usado em páginas da web para redirecionar o usuário a uma página específica após o envio da entrada
*/
?>