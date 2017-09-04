<?php

class beregisztracioModel {

    public function register($uid, $vnev, $knev, $uname, $pass, $telefon, $email, $szuldatum, $reg_datum) {
        try {
            $new_password = password_hash($pass, PASSWORD_DEFAULT);
            $uid = $db->lastInsertId();

            $stmt = $this->db->prepare("INSERT INTO user(id,vezeteknev,keresztnev,username,jelszo,telefonszam,email,szuletesi_datum,reg_datum) 
                                                       VALUES(:id, :vnev, :knev,:uname, :pass, :telefon, :email, :szuldatum, :CURRENT_TIMESTAMP)");

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