<?php

require_once './app/controller/controller.php';

class hirController extends controller{
    
    public function hir() {
        require_once './app/model/hirModel.php';
        $model=new hirModel;
        $result= $model->kiir($this->id);
         $this->render('./app/view/hir.php', ["data" => $result]);
        // model függvény példányosítása majd továbbítása a view felé 
    }
}
