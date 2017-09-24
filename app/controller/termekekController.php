<?php

require_once './app/controller/controller.php';

class termekekController extends controller {

    public function lista() {

        require_once './app/model/termekekModel.php';
        $model1 = new termekekModel;
        $termekek = $model1->kilista();



        $this->render('./app/view/termekek.php', ["hirek" => $hirek, "termekek" => $termekek]);
    }

    public function katlista() {
        require_once './app/model/termekekModel.php';
        $model2 = new termekekModel;
        $result = $model2->katlista($this->id);
        $this->render('./app/view/kattermek.php', ["katlistak" => $result]);
    }

}
