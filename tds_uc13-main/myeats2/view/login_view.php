<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="../controller/login_controller.php?acao=login">
        Email: <input type="text" name="email" id="email"/><br>
        Senha: <input type="password" name="password" id="password"/><br>
        <input type="submit" value="Login"/>
    </form>
    <br>
    <a href="http://localhost:8080/tds_uc13/myeats/view/user_create_view.php" target="_blank">Novo Cadastro</a>
</body>
</html>