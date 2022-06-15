<?php

    require_once "../util/database.php";

class CadastraModel {

    public function registrar($id, $matricula, $data_hora) {
        $db = new Database();
        $con = $db->connect();
        //$sql = "INSERT INTO USER (name, address, email, password) VALUES(:name, :address, :email, :password)";
        //$result = $con->execute($sql);

        $sql = "INSERT INTO user (id, matricula, data_hora) VALUES (:id, :matricula, :data_hora)"; //: coloca " " e torna tudo dentro tipo uma string
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(['id'=>$id, 'matricula'=>$matricula, 'data_hora'=>$data_hora]); //name entre aspas deve ser o mesmo name que está nos VALUES

        return  $result;
    }
}
?>


