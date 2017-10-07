<?php

class receptekModel {

    public function kiir($id) {
        $pdo = Application::getConnection();
        $recept = "select * from receptek ";
       $recept .= $id === false ? "order by id" : "where id={$id}";
        $stm = $pdo->prepare($recept);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function kilista($count=null) {
        $pdo = Application::getConnection();
        $recept="select * from receptek order by id ";
        if(isset($count)){
            $recept .=" limit {$count}";
        }
        $stm=$pdo->prepare($recept);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
      //adatok kezelése függvény segítségével
       
    }

}