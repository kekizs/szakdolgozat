<?php

class tortenelemModel {

    public function kiir($id) {
        $pdo = Application::getConnection();
        $tori1 = "select * from torihirek ";
        $tori1 .= $id === false ? "order by id" : "where id={$id}";
        $stm = $pdo->prepare($tori);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function kilista($count=null) {
        $pdo = Application::getConnection();
        $torik1="select * from torihirek order by id ";
        if(isset($count)){
            $torik1 .=" limit {$count}";
        }
        $stm=$pdo->prepare($torik1);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
      //adatok kezelése függvény segítségével
       
    }

}
