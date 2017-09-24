<?php

class kategoriaModel {
    public function kilista() {
        $pdo = Application::getConnection();
        $kategoriak="select * from kategoria ; ";
        $stm=$pdo->prepare($kategoriak);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
      //adatok kezelése függvény segítségével
       
    }
}