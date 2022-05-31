<?php

    require_once "../util/database.php";

class LoginModel {

    public function login($email, $password) {
        $db = new Database();
        $con = $db-> connect();
        $sql = "SELECT email FROM user WHERE email = :email AND password = :password";
        $stmt = $con-> prepare($sql);
        $result = $stmt-> execute(["email"=> $email, "password"=> $password]);
        $total = $stmt-> rowCount();
        
        if($total == 1){
            return true;
        }else{
            return false;
        }

        //echo "Entrou no login: ".$email." ".$password;
        //$sql = "INSERT INTO USER (email, password) VALUES(:nome, :endereco, :email, :senha)";
        //$result = $con->execute($sql);

        //$sql = "INSERT INTO CADASTRO (email, password) VALUES (:email, :password)"; //: coloca " " e torna tudo dentro tipo uma string
        //$stmt = $con->prepare($sql);
        //$result = $stmt->execute(['email'=>$email, 'password'=>sha1($password)]); //nome entre aspas deve ser o mesmo nome que está nos VALUES
    }
}

//INSERT INTO USER(name, email, password, address) VALUES ("admin","admin@senac","asdf@123","São Leo");
?>

