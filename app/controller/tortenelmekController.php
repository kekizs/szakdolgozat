<?php

require_once './app/controller/controller.php';

class tortenelmekController extends controller{
    
    public function hir() {
        require_once './app/model/tortenelemModel.php';
        $model=new tortenelemModel;
        $result= $model->kiir($this->id);
         $this->render('./app/view/tortenelem.php', ["hir" => $result]);
        // model függvény példányosítása majd továbbítása a view felé 
    }
    public function tori(){
         
        require_once './app/model/tortenelemModel.php';
        $model1=new tortenelemModel;
        $tortenelmek= $model1->kilista();
        
         $this->render('./app/view/tortenelmek.php', ["tortenelmek" => $tortenelmek]);
        
    }
    
}
