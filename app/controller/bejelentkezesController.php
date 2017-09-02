<?php

require_once './app/controller/controller.php';

class bejelentkezesController extends controller{
   
    public function bejelent(){
        $this->render('./app/view/bejelentkezes.php'); 
    }
    
    
}
