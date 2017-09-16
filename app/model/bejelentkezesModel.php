<?php

class bejelentkezesModel {

    public function dologin($uname, $email, $pass) {
        try {
            $pdo = Application::getConnection();
            $stmt = $pdo->prepare("SELECT * FROM user WHERE username=:uname OR email=:email LIMIT 1");
            $stmt->execute(array(':uname' => $uname, ':email' => $email));
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                if (password_verify($pass, $user['jelszo'])) {
                    $_SESSION['user'] = $user;
                    $_SESSION['kosar']=[];
                   
                    return true;
                } else {
                    return false;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function is_loggedin() {
           return isset($_SESSION['user']);
     
    }

    public function redirect($url) {
        header("Location: $url");
    }

   

}
?>

