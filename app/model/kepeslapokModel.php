<?php

class kepeslapokModel {
       
    public function kilista() {
        
        $pdo = Application::getConnection();
        $kepeslap = "select * from kepeslap; ";
        $stm = $pdo->prepare($kepeslap);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;

        //adatok kezelése függvény segítségével
    }
}
