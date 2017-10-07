<?php

require_once './app/controller/controller.php';

class receptekController extends controller{
    
    public function hir() {
        require_once './app/model/tortenelemModel.php';
        $model=new tortenelemModel;
        $result= $model->kiir($this->id);
         $this->render('./app/view/tortenelem.php', ["hir" => $result]);
        // model függvény példányosítása majd továbbítása a view felé 
    }
    public function recept(){
         
        require_once './app/model/receptekModel.php';
        $model1=new receptekModel;
        $receptek= $model1->kilista();
        
         $this->render('./app/view/receptek.php', ["receptek" => $receptek]);
        
    }
    
}
