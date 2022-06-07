<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Cadastro</title>
</head>

<body>
    <form method="post" action="../controller/cadastro_controller.php">
        <label for="">Cadastro - MyEats</label>
        <br>
        Nome: <input type="text" name="name" id="name"/><br>
        Sobrenome: <input type="text" name="surname" id="surname"/><br>
        Endereço: <input type="text" name="address" id="address"/><br>
        CEP: <input type="number" name="cep" id="cep"/><br>
        Email: <input type="text" name="email" id="email"/><br>
        Senha: <input type="password" name="password" id="password"/><br>
        <input type="submit" value="CADASTRAR"/>
    </form>
</body>
</html>