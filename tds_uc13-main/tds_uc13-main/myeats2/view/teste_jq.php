<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="../static/js/jquery-3.6.0.js"></script>
    <script> type="text/javascript">
        $(document).ready(function(){
            console.log("document loaded");

            $("#btn_enviar").click(function(){
                valida_dados();
            })
        })

        function valida_dados(){
            var conteudo = $("#nome").val()
            $("#btn_enviar").val(conteudo);

            $.ajax({
                url: "../controller/responde_ajax.php",
                dataType: "json"
            })
            .done(function(data){
                alert( data[1].email);
            })
        }
        

//          $.post( "..//controller/responde_ajax.php", {  })
//            .done(function( data ) {
//           alert( "Data Loaded: " + data );
//        });
//        }
//      

    </script>

</head>
<body>
    <h1>Usando Jquery</h1>
    Nome: <input type="text" id="nome" name="nome">
    <br>
    <input type="button" id="btn_enviar" value="Enviar Dados"/>
    
</body>
</html>