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

        $sql = "DELETE FROM user WHERE ID = :id";
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(['id' => $id]);
        return $result;
    }

    public function update() {
        $db = new Database();
        $con = $db->connect();
    }

    public function findAll() {
        $db = new Database();
        $con = $db->connect();
        $sql = "SELECT id, name, email, address FROM user";
        $stmt = $con->prepare($sql);
        $result = $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>
