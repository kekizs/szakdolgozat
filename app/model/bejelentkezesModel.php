<?php

class bejelentkezesModel {

    public function dologin($uname, $email, $pass) {
        try {
            $pdo = Application::getConnection();
            $stmt = $pdo->prepare("SELECT * FROM user WHERE username=:uname OR email=:email LIMIT 1");
            $stmt->execute(array(':uname' => $uname, ':email' => $email));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                if (password_verify($pass, $userRow['jelszo'])) {
                    $_SESSION['user'] = $userRow['id'];
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
        if (isset($_SESSION['user'])) {
            return true;
        }
    }

    public function redirect($url) {
        header("Location: $url");
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['user']);
        return true;
    }

}
?>

