<?php

require_once './app/controller/controller.php';

class hirController extends controller{
    
    public function hir() {
        require_once './app/model/hirModel.php';
        $model=new hirModel;
        $result= $model->kiir($this->id);
         $this->render('./app/view/hir.php', ["hir" => $result]);
        // model függvény példányosítása majd továbbítása a view felé 
    }
    public function listaz(){
         
        require_once './app/model/hirModel.php';
        $model1=new hirModel;
        $hirek= $model1->kilista();
        
         $this->render('./app/view/hirek.php', ["hirek" => $hirek]);
        
    }
    
}
