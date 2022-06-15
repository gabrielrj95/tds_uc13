<?php
    require_once "../model/registroPonto_model.php";

    if(!isset($_GET["acao"])) { // se acao NÃO ESTIVER SETADO
        $acao = "registrar";
    } else {
        $acao = $_GET["acao"];
    }

    if ($acao == "registrar"){
        if (isset($_POST['matricula']) || !empty($_POST['matricula'])){ //isset -> checa se o indice(name) do array existe
            $name = $_POST['matricula'];
        } else{
            echo "Campo matricula não preenchido";
        }

        $CadastraModel = new CadastraModel(); //new cria(instancia) o objeto
        $result = $CadastraModel -> registrar($matricula); // -> chamando a função create
    }
    
?>