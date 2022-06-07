<?php

    require_once "../util/database.php";

class LoginModel {

    public function login($email, $password) {

        $db = new Database();
        $con = $db->connect();
        $sql = "SELECT email FROM user WHERE email = :email AND password = :passwordCripto";
        $stmt = $con->prepare($sql); //compila no banco e retorna o swl -> prepare faz parte do connect
        $result = $stmt->execute(['email'=>$email, 'passwordCripto'=>$password]); //nome entre aspas deve ser o mesmo nome que está nos VALUES
        $total = $stmt->rowCount();

        if ($total == 1){
            return true;
        } else {
            return false;
        }
    }
}
?>
