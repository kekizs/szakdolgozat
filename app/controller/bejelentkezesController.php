<?php

require_once './app/controller/controller.php';

class bejelentkezesController extends controller {

    public function bejelent() {

        require_once("./app/model/bejelentkezesModel.php");
        $login = new bejelentkezesModel();

        if ($login->is_loggedin() != "") {
            $login->redirect('index.php');
        }

        if (isset($_POST['btn-login'])) {
            $uname = strip_tags($_POST['txt_uname_email']);
            $email = strip_tags($_POST['txt_uname_email']);
            $pass = strip_tags($_POST['txt_password']);

           if ($login->doLogin($uname, $email, $pass)) {
                $login->redirect('index.php');
            } else {
                $error = "hibás adatok !";
            }
        }

        $this->render('./app/view/bejelentkezes.php');
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['user']);
        header("Location: ./index.php");
        die();
    }

}
