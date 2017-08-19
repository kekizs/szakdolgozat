<?php

require_once './app/controller/controller.php';

class testController extends controller {

    public function test($msg) {
        require_once './app/model/test.php';
        $model = new test;
        $result = $model->write($msg);
        $this->render('./app/view/test.php', ["data" => $result]);
    }

}
