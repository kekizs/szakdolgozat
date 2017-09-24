<?php

require_once './app/controller/controller.php';

Class userController extends controller {

    public function modify() {
        require_once './app/model/userModel.php';
        $model = new userModel();
        if (!$model->is_loggedin()) {
            header("location: ./index.php");
            die();
        }




        $user = $model->get();

        $this->render('./app/view/user.php', ['user' => $user]);
    }

    public function save() {

        require_once './app/model/userModel.php';
        $model = new userModel();
        if (!$model->is_loggedin()) {
            header("location: ./index.php");
            die();
        }

        $model->save();
        header("location: ./index.php");
    }

}
