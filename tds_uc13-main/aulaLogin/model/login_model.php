<?php

    require_once "../util/databaseLogin.php";

class LoginModel {

    public function create($email, $password) {
        $db = new Database();
        $con = $db->connect();
        //$sql = "INSERT INTO USER (nome, endereco, email, senha) VALUES(:nome, :endereco, :email, :senha)";
        //$result = $con->execute($sql);

        $sql = "INSERT INTO CADASTRO (email, password) VALUES (:email, :password)"; //: coloca " " e torna tudo dentro tipo uma string
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(['email'=>$email, 'password'=>sha1($password)]); //nome entre aspas deve ser o mesmo nome que está nos VALUES
    }
}
?>
