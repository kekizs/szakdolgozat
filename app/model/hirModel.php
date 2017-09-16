<?php

class hirModel {

    public function kiir($id) {
        $pdo = Application::getConnection();
        $hir1="select * from hirek ";
        $hir1 .=$id===false ? "order by datum limit 1" :"where id={$id}";
        $stm=$pdo->prepare($hir1);
        $stm->execute();
        $result=$stm->fetch(PDO::FETCH_ASSOC);
            return $result;
            
      //adatok kezelése függvény segítségével
       
    }
  public function kilista() {
        $pdo = Application::getConnection();
        $termek1="select * from hirek order by datum DESC LIMIT 3; ";
        $stm=$pdo->prepare($termek1);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
      //adatok kezelése függvény segítségével
       
    }
}
?>
