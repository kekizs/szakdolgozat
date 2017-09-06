<?php


    require_once './app/controller/controller.php';

class beregisztracioController extends controller{
   
    public function bereg(){
         /*
          Ha jól gondolom akkor itt nem kell példányosítanom a model-t mert nem akarok adatot továbbítani a view-ba
          require_once './app/model/beregisztracioModel.php';
          $model=new beregisztracioModel;
          $result= $model->register($id.......);*/
        
        $this->render('./app/view/beregisztracio.php'); 
    }
}
