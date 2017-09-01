<?php

require_once './app/controller/controller.php';

class defaultController extends controller {
    
    public function run(){
        $this->render('./app/view/index.php'); 
    }
    
}
