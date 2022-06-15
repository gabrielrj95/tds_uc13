<?php
    require_once "../controller/user_controller.php";

?>


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
    </script>

    <script type="text/javascript">
        function deletar(id) {
            $.ajax({
                data: {id:id, acao: 'deletar'}, // variavel ID recebe id depois passa a ação deletar
                url: "../controller/user_controller.php",
                dataType:"json"
        })
        .done(function(data){
            alert(data.msg);
        })
        }
    </script>
</head>

<body>
    <h2>Lista de usuários</h2>
    <table border=1>
        <tr>
            <td>
                ID
            </td>
            <td>
                Nome
            </td>
            <td>
                Email
            </td>
            <td>
                Endereço
            </td>
            <td>
                Excluir
            </td>
        </tr>
        <?php
            foreach($dados as $item) {
                echo "<tr>";
                echo "<td><a href='user_edit_view.php?id=".$item['id']."'>".$item['id']."</a></td>"; //primeiro item é o variavel  e o segundo é o item da tela
                echo "<td>".$item["name"]."</td>";
                echo "<td>".$item["email"]."</td>";
                echo "<td>".$item["address"]."</td>";
                echo "<td><a href='#' onclick = deletar(".$item["id"].")>X</a></td>";
                echo "<tr>";
            }

        ?>


    </table>
    
</body>
</html>