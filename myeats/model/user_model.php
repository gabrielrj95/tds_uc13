<?php

require_once "../util/database.php";

    class UserModel{

        public function create($name, $address, $email, $password) {
            $db = new Database();
            $con = $db->connect();
            
            $sql = "INSERT INTO user (name, address, email, password) VALUES (:name, :address, :email, :password)";
            $stmt = $con->prepare($sql); //compila

            $result = $stmt->execute(['name'=> $name, 'email'=> $email, 'password'=>sha1($password), 'address'=> $address]);
        }
        public function delete(){
            echo "delete";
        }
        public function update(){
            echo "update";
        }
        public function findall(){
            echo "find all";
        }

    
    }

?>