<?php

require_once './app/controller/controller.php';

class kepeslapController extends controller{
    
    public function hir() {
        require_once './app/model/kepeslapokModel.php';
        $model=new kepeslapokModel;
        $result= $model->kiir($this->id);
         $this->render('./app/view/kepeslap.php', ["hir" => $result]);
        // model függvény példányosítása majd továbbítása a view felé 
    }
    public function kepeslapok(){
         
        require_once './app/model/kepeslapokModel.php';
        $model1=new kepeslapokModel;
        $kepeslapok= $model1->kilista();
        
         $this->render('./app/view/kepeslapok.php', ["kepeslapok" => $kepeslapok]);
        
    }
    
}
