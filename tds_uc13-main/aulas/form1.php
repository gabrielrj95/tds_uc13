<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frm-dados" action="processa-dados-form.php" method="POST">
            Nome: <input type="text" name="nome" id="nome"/> <br><br>
            Idade: <input type="text" name="idade" id="idade" /> <br><br>
            Telefone: <input type="tel" name="telefone" id="telefone" /> <br><br>
            Gênero:
            <br>
            <input type="radio" name="gender" id="gender" value="feminino">
            <label for="feminino">Feminino</label>

            <input type="radio" name="gender" id="gender" value="masculino">
            <label for="masculino">Masculino</label>
            <br>
            <br>
            Interesses:
            <br>
            <input type="checkbox" name="interesses[]" id="interesses" value="java">
            <label for="interesses">Java</label>

            <input type="checkbox" name="interesses[]" id="interesses" value="bancoDeDados">
            <label for="interesses">Banco de Dados</label>

            <input type="checkbox" name="interesses[]" id="interesses" value="php">
            <label for="interesses">PHP</label>

            <input type="checkbox" name="interesses[]" id="interesses" value="javascript">
            <label for="interesses">JavaScript</label>

            <input type="checkbox" name="interesses[]" id="interesses" value="htmlCss">
            <label for="interesses">HTML/CSS</label>
            <br>
            <br>
            Foto: <input type="file" name="arquivoUpload" id="arquivoUpload" value="arquivoUpload">
            <br>
            <br>
            <input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar Dados" />
    </form>
</body>
</html>

            