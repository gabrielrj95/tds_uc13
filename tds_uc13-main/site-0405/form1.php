<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
    <form name= "frm_dados" action = "processa-dados-form.php" method="POST">
        Nome: <input type= "text" name="nome"/> <br><br>
        Idade: <input type= "text" name="idade"/> <br><br>
        Telefone: <input type= "text" name="telefone"/> <br><br>
        Genero: <input type= "radio" name="gen" id="gen" value="feminino"/>Feminino
        <input type= "radio" name="gen" id="gen" value="masculino"/>Masculino <br><br>
    </div>
    
    <div>
        Interesses: <input type="checkbox" id="interesses" name="interesses[]" value="java"/> Java
        <input type="checkbox" id="interesses" name="interesses[]" value="bancoDeDados"/> Banco de Dados
        <input type="checkbox" id="interesses" name="interesses[]" value="php"/> PHP
        <input type="checkbox" id="interesses" name="interesses[]" value="javaScript"/> JavaScript
        <input type="checkbox" id="interesses" name="interesses[]" value="htmlCss"/> HTML/CSS
        <br><br>
    </div>
        Foto: <input type="file" id="foto_flamingo" name="foto_flamingo" value="foto"/> foto
<br><br>
        <input type= "submit" name="btn_enviar" value="Enviar Dados"/> <br>
    </form>
   
</body>



</html>


