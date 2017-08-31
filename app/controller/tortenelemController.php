<?php

require_once './app/controller/controller.php';

class tortenelemController extends controller{
    
    public function tori() {
        require_once './app/model/tortenelemModel.php';
        $model=new tortenelemModel;
        $result= $model->kiir($this->id);
         $this->render('./app/view/tortenelem.php', ["data" => $result]);
         
    }
}


