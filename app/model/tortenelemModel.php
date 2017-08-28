<?php

class tortenelemModel {

    public function kiir($id) {
        $pdo = Application::getConnection();
        $hir1="select * from hirek ";
        $hir1 .=$id===false ? "order by datum limit 1" :"where id={$id}";
        $stm=$pdo->prepare($hir1);
        $stm->execute();
        $result=$stm->fetch(PDO::FETCH_ASSOC);
            return $result;
            
      
       
    }

}
?>
