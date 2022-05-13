<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name= "frm_dados" action = "processa-dados-form.php" method="POST">
        Nome: <input type= "text" name="nome"/> <br>
        Idade: <input type= "text" name="idade"/> <br>
        Telefone: <input type= "text" name="telefone"/> <br>
        Genero: <input type= "radio" name="gen" id="gen" value="feminino"/>Feminino
        <input type= "radio" name="gen" id="gen" value="masculino"/>Masculino <br>
        Interesses: <input type="checkbox" id="interesses" name="interesses" value="interesses"/> Java
        <input type="checkbox" id="interesses" name="interesses" value="interesses"/> Banco de Dados
        <input type="checkbox" id="interesses" name="interesses" value="interesses"/> PHP
        <input type="checkbox" id="interesses" name="interesses" value="interesses"/> JavaScript
        <input type="checkbox" id="interesses" name="interesses" value="interesses"/> HTML/CSS
        <br>  
        Foto: <input type="file" id="foto" name="foto" value="foto"/> foto
<br>
        <input type= "submit" name="btn_enviar" value="Enviar Dados"/> <br>
</form>
   
</body>
</html>


