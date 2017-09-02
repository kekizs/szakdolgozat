<?php


    require_once './app/controller/controller.php';

class regisztracioController extends controller{
   
    public function bereg(){
        $this->render('./app/view/regisztracio.php'); 
    }
}
