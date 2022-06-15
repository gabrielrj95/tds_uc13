<?php

    require_once "../util/databaseLogin.php";

class cadastroModel {

    public function createcreate($name, $surname, $address, $cep, $email, $password) {
        $db = new Database();
        $con = $db->connect();
        //$sql = "INSERT INTO USER (nome, endereco, email, senha) VALUES(:nome, :endereco, :email, :senha)";
        //$result = $con->execute($sql);

        $sql = "INSERT INTO CADASTRO (name, surname, address, cep, email, password) VALUES (:name, :surname, :address, :cep, :email, :password)"; //: coloca " " e torna tudo dentro tipo uma string
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(['name'=>$name, 'surname'=>$surname, 'address'=>$address, 'cep'=>$cep, 'email'=>$email, 'password'=>sha1($password)]); //nome entre aspas deve ser o mesmo nome que está nos VALUES
    }
}
?>
