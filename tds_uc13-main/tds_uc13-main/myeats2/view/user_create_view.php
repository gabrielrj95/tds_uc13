<?php

    //require_once "../util/checkSession.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="../controller/user_controller.php?acao=create">
        Nome: <input type="text" name="name" id="name"/> <br>
        Endereço: <input type="text" name="address" id="address"/><br>
        Email: <input type="text" name="email" id="email"/><br>
        Senha: <input type="password" name="password" id="password"/><br>
        Confirmar Senha: <input type="password" name="confSenha" id="confSenha"/><br>
        <input type="submit" value="Cadastrar"/>
    </form>
</body>
</html>