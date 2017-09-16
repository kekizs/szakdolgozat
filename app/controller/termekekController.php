<?php

require_once './app/controller/controller.php';

class termekekController extends controller {

    public function lista() {

        require_once './app/model/termekekModel.php';
        $model2 = new termekekModel;
        $termekek = $model2->kilista();

        $this->render('./app/view/termekek.php', ["hirek" => $hirek, "termekek" => $termekek]);
    }

}
