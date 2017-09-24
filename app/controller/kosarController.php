<?php

require_once './app/controller/controller.php';

class kosarController extends controller {

    public function kosar() {

        require_once './app/model/kosarModel.php';
        $model = new kosarModel;
        $termekek = $model->kiir();

        $this->render('./app/view/kosar.php', ['termekek' => $termekek]);
    }

    public function add() {
        require_once './app/model/kosarModel.php';

        $model = new kosarModel;

        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("HTTP 500 Internal Server Error", true, 500);
            die("Hibás adat");
        }

        $id = $_GET['id'];
        $count = $model->add($id);

        print $count;
    }

    public function delete() {


        require_once './app/model/kosarModel.php';
        $model = new kosarModel;

        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("HTTP 500 Internal Server Error", true, 500);
            die("Hibás adat");
        }

        $id = $_GET['id'];
        $model->delete($id);
        

        print $id;
    }
    
    public function counter() {


        require_once './app/model/kosarModel.php';
        $model = new kosarModel;

        if (!isset($_GET['id']) || !is_numeric($_GET['id']) || !isset($_GET['direction'])) {
            header("HTTP 500 Internal Server Error", true, 500);
            die("Hibás adat");
        }

        $id = $_GET['id'];
        $direction = $_GET['direction'];
       $value= $model->counter($id,$direction);
        

        print $value;
    }

    public function check() {
        
        require_once './app/model/kosarModel.php';
        $model = new kosarModel;
        $termekek = $model->kiir();

        $this->render('./app/view/check.php', ['termekek' => $termekek]);
        
        
    }
}
