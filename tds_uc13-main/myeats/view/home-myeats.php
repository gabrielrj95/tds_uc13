<?php

    require_once "../util/checkSession.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MyEats</title>
    <script type="text/javascript">
        function logout(){
            window.location = "http://localhost:8080/tds_uc13/myeats/controller/login_controller.php?acao=logout";
        }
    </script>
</head>

<body>
    <h1>Bem-vindo ao MyEats</h1>
    <a href="#" onclick="logout()">Sair</a>

</body>
</html>