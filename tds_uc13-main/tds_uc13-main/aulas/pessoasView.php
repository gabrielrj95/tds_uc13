<?php

//pessoasView.php
    require_once "pessoasModel.php";
    $dadosClientes = pegarDados();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Document</title>
    </head>

    <body>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>

            <tbody>
                <?php foreach ($dadosClientes as $item ) { ?>
                <tr>
                    <td><?php echo $item["nome"]; ?> </td>
                    <td><?php echo $item["idade"]; ?> </td>
                    <td><?php echo $item["estado"]; ?> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
            