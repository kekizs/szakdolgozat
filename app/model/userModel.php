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

    public function get() {
        $id = $_SESSION['user']['id'];

        $pdo = Application::getConnection();
        $stmt = $pdo->prepare("select * from user where id=:id;");

        $stmt->execute(['id' => $id]);
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        return $user;
    }

    public function save() {

        $vname = strip_tags($_POST['vname']);
        $kname = strip_tags($_POST['kname']);
        $uname = strip_tags($_POST['uname']);
        $email = strip_tags($_POST['email']);
        $telefon = ($_POST['tel']);
        $szuldatum = ($_POST['szuldatum']);

        $id = $_SESSION['user']['id'];

        $pdo = Application::getConnection();
        $stmt = $pdo->prepare("update user set vezeteknev=:vname, keresztnev=:kname, username=:uname, email=:email,  szuletesi_datum=:szuldatum where id=:id");


       $result= $stmt->execute(['id' => $id,
            'vname' => $vname,
            'kname' => $kname,
            'uname' => $uname,
            'email' => $email,
            'szuldatum' => $szuldatum]);
        
       return $result;
    }

}
