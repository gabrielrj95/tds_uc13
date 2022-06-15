<?php
    require_once "../model/user_model.php";

    if(!isset($_GET["acao"])) { // se acao NÃO ESTIVER SETADO
        $acao = "findAll";
    } else {
        $acao = $_GET["acao"];
    }

    if($acao == "findAll") {
        $model = new UserModel();
        $dados = $model->findAll();
    } 
    else if ($acao == "create"){

        if (isset($_POST['name']) || !empty($_POST['name'])){ //isset -> checa se o indice(name) do array existe
            $name = $_POST['name'];
        } else{
            echo "Campo Nome não preenchido";
        }
    
        if (isset($_POST['address']) || !empty($_POST['address'])){
            $address = $_POST['address'];
        } else{
            echo "Campo Endereço não preenchido";
        }
    
    
        if (isset($_POST['email']) || !empty($_POST['email'])){
            $email = $_POST['email'];
        } else{
            echo "Campo e-mail não preenchido";
        }
    
    
        if (isset($_POST['password']) || !empty($_POST['password'])){
            $password = $_POST['password'];
    
        } else{
            echo "Campo senha não preenchido";
        }
    
    
        if (isset($_POST['confSenha']) || !empty($_POST['confSenha'])){
            $confSenha = $_POST['confSenha'];
    
        } else{
            echo "Campo confirmação de senha não preenchido ou diferente da senha";
        }
    
    
        if ($password === $confSenha){
            echo "Cadastrado com Sucesso!";
    
        } else {
            echo "Senha incorreta, tente novamente"; 
        }

        $userModel = new UserModel(); //new cria(instancia) o objeto
        $result = $userModel -> create($name, $email, $address, $password); // -> chamando a função create
    
    }   
    else if($acao == "deletar"){
        $id = $_GET["id"];
        $userModel = new UserModel();
        $result = $userModel -> deletar($id);  
        
        if($result == 1 ){
            $msg = ("Usúario deletado com sucesso!");
        }else{
            $msg = ("Erro ao deletar usuário!");
        }

        header("Location: http://localhost:8080/tds_uc13-main/myeats2/view/user_list_view.php?msg=".$msg);
    }

?>