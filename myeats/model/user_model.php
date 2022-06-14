<?php

    require_once "../util/database.php";

class UserModel {

    public function create($name, $email, $address, $password) {
        $db = new Database();
        $con = $db->connect();
        //$sql = "INSERT INTO USER (name, address, email, password) VALUES(:name, :address, :email, :password)";
        //$result = $con->execute($sql);

        $sql = "INSERT INTO user (name, email, address, password) VALUES (:name, :email, :address, :password)"; //: coloca " " e torna tudo dentro tipo uma string
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(['name'=>$name, 'email'=>$email, 'address'=>$address, 'password'=>sha1($password)]); //name entre aspas deve ser o mesmo name que está nos VALUES

        return  $result;

    }

    public function deletar($id) {
        $db = new Database();
        $con = $db->connect();
        $sql = "DELETE FROM USER WHERE id = :id"; //: coloca " " e torna tudo dentro tipo uma string
        $stmt = $con->prepare($sql); // projete o sql, coloca aspas em tudo
        $result = $stmt->execute(['id' => $id]);
        return $result;

    }

    public function update($id, $name, $email, $address) {
        $db = new Database();
        $con = $db->connect();
        $sql = "UPDATE user set name = :name, email = :email, address = :address WHERE id = :id";
        $stmt = $con -> prepare($sql); 
        $result = $stmt -> execute([':name' => $name, ':email' => $email, ':address' => $address, 'id' => $id  ]); 
    }

    public function findAll() {
        $db = new Database();
        $con = $db->connect();
        $sql = "SELECT id, name, email, address FROM user";
        $stmt = $con->prepare($sql);
        $result = $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById($id) {
        $db = new Database();
        $con = $db->connect();
        $sql = "SELECT id, name, email, address FROM user WHERE id = :id";
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(['id'=>$id]); //=> é um array associativo

        //$dados['id'] = 10;
        //$dados = array('id' => 10);
        //$dados = ['id' => 10];
        
        return $stmt->fetchAll();
    }
}
?>


