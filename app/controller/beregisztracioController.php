<?php


    require_once './app/controller/controller.php';

class beregisztracioController extends controller{
   
    public function bereg(){
        $this->render('./app/view/beregisztracio.php'); 
    }
}
