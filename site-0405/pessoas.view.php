<?php

//pessoas_view.php

require_once "pessoas_model.php";
$dados_clientes = pegar_dados();

?>

<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Document</title>
</head>

<body>

<table class="table">
    <thead class = "thead-dark">
        <tr>
            <th scope= "col">Nome</th>
            <th scope= "col">Idade</th>
            <th scope= "col">Estado</th>
        </tr>
</thead>

<tbody>

<?php foreach ($dados_clientes as $item){ ?>
<tr>
    <td><?php echo $item['Nome']; ?></td>
    <td><?php echo $item['Idade']; ?></td>
    <td><?php echo $item['Estado']; ?></td>

</tr>
<?php } ?>
</tbody></table></body></html>