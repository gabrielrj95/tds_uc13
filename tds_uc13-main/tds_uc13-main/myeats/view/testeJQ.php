<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../static/js/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        console.log("Documento carregado");

        $("#btnEnviar").click(function(){
            validaDados();
        })
    })

    function validaDados() {
        var conteudo = $("#nome").val()
        $("#btnEnviar").val(conteudo);

        $.ajax({
            url: "../controller/respondeAjax.php",
            dataType:"json"
        })
        .done(function(data){
            alert(data[2].email);
        })

        //$.post( "../controller/respondeAjax.php", { })
        //    .done(function( data ) {
        //    alert( "Data Loaded: " + data );
  };
    
    
    </script>
</head>
<body>
    <h1>Usando JQuery</h1>
    Nome:<input type="text" id="nome" name="nome">
    <br>
    <input type="button" id="btnEnviar" value="Enviar Dados"/>
    
</body>
</html>