<?php

class userController  {

    public function register($uid,$vnev, $knev, $uname, $pass, $telefon, $email, $szuldatum, $reg_datum) {
        try {
            $new_password = password_hash($pass, PASSWORD_DEFAULT);
            $uid = $db->lastInsertId();

            $stmt = $this->db->prepare("INSERT INTO user(id,vezeteknev,keresztnev,username,jelszo,telefonszam,email,szuletesi_datum,reg_datum) 
                                                       VALUES(:id, :vnev, :knev,:uname, :mail, :pass, :telefon, :email, :szuldatum, :CURRENT_TIMESTAMP)");
            
            $stmt->bindparam(":id", $uid);
            $stmt->bindparam(":vnev", $vnev);
            $stmt->bindparam(":knev", $knev);
            $stmt->bindparam(":uname", $uname);
            $stmt->bindparam(":pass", $new_password);
            $stmt->bindparam(":telefon", $telefon);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":szuldate", $szuldatum);
            $stmt->bindparam(":CURRENT_TIMESTAMP", $reg_datum);
           
            $stmt->execute();

            return $stmt;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function login($uname, $email, $pass) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM user WHERE username=:uname OR email=:email LIMIT 1");
            $stmt->execute(array(':uname' => $uname, ':email' => $email));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                if (password_verify($pass, $userRow['user_pass'])) {
                    $_SESSION['user_session'] = $userRow['user_id'];
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
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function redirect($url) {
        header("Location: $url");
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

}
?>

