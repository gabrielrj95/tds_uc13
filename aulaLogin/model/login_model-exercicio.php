<? 

    require_once "../util/databaseLogin.php";

class LoginModel{

    public funcion login($email, $password){
    $db = new Database();
    $con = $db->connect();
    $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
    if ()
    $stmt = $con->prepare($sql);
    $result = $stmt->execute(['email' => $email, 'password' => $password]);
    $data = $result->fetchAll();
    echo "Não Logou";
    }
}

?>