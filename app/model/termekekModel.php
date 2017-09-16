<?php



class termekekModel {
    public function kilista() {
        $pdo = Application::getConnection();
        $termek1="select * from termek order by datum DESC LIMIT 3; ";
        $stm=$pdo->prepare($termek1);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
      //adatok kezelése függvény segítségével
       
    }
}
