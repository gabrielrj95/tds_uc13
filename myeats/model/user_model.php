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
    }

    public function delete() {
        echo "delete";
    }

    public function update() {
        echo "update";
    }

    public function findAll() {
        echo "findAll";
    }
}
?>
