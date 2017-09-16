<?php

require_once './app/controller/controller.php';

class defaultController extends controller {
    
    public function run(){
        
        require_once './app/model/hirModel.php';
        $model1=new hirModel;
        $hirek= $model1->kilista();
        
        require_once './app/model/termekekModel.php';
        $model2=new termekekModel;
        $termekek= $model2->kilista();
    
        $this->render('./app/view/index.php',["hirek" => $hirek,"termekek" => $termekek]); 
    }
}
  
    
