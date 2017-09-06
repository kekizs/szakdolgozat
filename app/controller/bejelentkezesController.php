<?php

require_once './app/controller/controller.php';

class bejelentkezesController extends controller{
   
    public function bejelent(){
      /*
       Ha jól gondolom akkor itt nem kell példányosítanom a model-t mert nem akarok adatot továbbítani a view-ba
        require_once './app/model/bejelentkezesModel.php';
        $model=new bejelentkezesModel;
        $result= $model->dologin($uname,$email,$pass);*/
        $this->render('./app/view/bejelentkezes.php'); 
    }
    
    
}
