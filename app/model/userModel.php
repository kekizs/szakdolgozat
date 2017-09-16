<?php

class userModel {

    public function is_loggedin() {
        return isset($_SESSION['user']);
    }

    public function modify($vnev, $knev, $uname, $telefon, $email, $szuldatum, $id) {

        $pdo = Application::getConnection();

        $_SESSION['id'] = $id;

        $stmt = $pdo->prepare("update user set vezeteknev=:vnev,keresztnev=:knev,username=:uname,telefonszam=:telefon,email=:email,szuletesi_datum=:szuldatum) 
                                                        where id=:user ");

        $stmt->bindparam(":id", $user);
        $stmt->bindparam(":vnev", $vnev);
        $stmt->bindparam(":knev", $knev);
        $stmt->bindparam(":uname", $uname);
        $stmt->bindparam(":telefon", $telefon);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":szuldatum", $szuldatum);

        $stmt->execute();
    }

   /* public function lekerdez() {
        try {
            $pdo = Application::getConnection();
            $stmt = $pdo->prepare("SELECT * FROM user WHERE vezeteknev=:vnev,keresztnev=:knev,username=:uname,telefonszam=:telefon,email=:email,szuletesi_datum=:szuldatum");
            $stmt->execute(array(':vnev' => $vnev, ':knev ' => $knev, ':uname' => $uname, ':telefon' => $telefon, ':email' => $email, ':szuldatum' => $szuletesi_datum));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
*/
}
