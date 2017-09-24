<?php

class hirlevelModel {

    public function hirlevel($nev, $email) {
     
            
            try {
                $pdo = Application::getConnection();
                $stmt = $pdo->prepare("INSERT INTO hirlevel(nev,email)  VALUES(:nev,:email)");


                $stmt->bindparam(":nev", $nev);
                $stmt->bindparam(":email", $email);
                $stmt->execute(array(':nev' => $nev, ':email' => $email));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

}
