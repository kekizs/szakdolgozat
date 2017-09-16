<?php

class beregisztracioModel {

    public function register($vnev, $knev, $uname, $reg_datum, $pass, $telefon, $email, $szuldatum) {
        try {
            $pdo = Application::getConnection();
            $new_password = password_hash($pass, PASSWORD_DEFAULT);


            $stmt = $pdo->prepare("INSERT INTO user(vezeteknev,keresztnev,username,jelszo,telefonszam,email,szuletesi_datum) 
                                                       VALUES(:vnev, :knev,:uname, :pass, :telefon, :email, :szuldatum)");

          
            $stmt->bindparam(":vnev", $vnev);
            $stmt->bindparam(":knev", $knev);
            $stmt->bindparam(":uname", $uname);
            $stmt->bindparam(":pass", $new_password);
            $stmt->bindparam(":telefon", $telefon);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":szuldatum", $szuldatum);

            $stmt->execute();
            $uid = $pdo->lastInsertId();

 
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

    public function logout() {
        session_destroy();
        unset($_SESSION['user']);
        return true;
    }

}

?>