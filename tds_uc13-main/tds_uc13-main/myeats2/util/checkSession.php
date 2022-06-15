<?php
    session_start();
    if ($_SESSION["logado"] != true){
        header("Location: ../view/login_view.php");
    }
?>