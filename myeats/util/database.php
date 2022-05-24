<?php

class Database{
    private $_user = "root";
    private $_password = "";
    private $_server_ip = "localhost";
    private $database_name = "myeatsdb";


    public function connect (){
        $con = new PDO("mysql:host=".$this->_server_ip.";dbname=".$this->database_name, $this->_user, $this->_password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;              

    }

    public function desconect (){

    }

}

?>