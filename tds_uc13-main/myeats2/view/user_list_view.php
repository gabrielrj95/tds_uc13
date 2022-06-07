<?php
    require_once "../controller/user_controller.php";

    if(isset($_GET["msg"])){
        echo "<script type='text/javascript'>";
        $msg = $_GET['msg'];
        echo "alert('".$msg."')";
        echo "</script>";   
    }    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script type= "text/javascript">
        function deletar(id){
            if(confirm("Tem certeza que deseja remover esse registro?")){
                url = "http://www.localhost:8080/tds_uc13-main/myeats2/controller/user_controller.php?acao=deletar&id="+id;
                window.location = url;
                }
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
                echo "<td>".$item["id"]."</td>";
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