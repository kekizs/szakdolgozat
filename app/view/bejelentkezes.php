<?php
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
?>

                    <div class="signin-form">

                        <div class="container">


                            <form class="form-signin" method="post" id="login-form">

                                <h2 class="form-signin-heading">Bejelentkezés a Webshopba.</h2><hr />

                                <div id="error">
<?php
if (isset($error)) {
    ?>
                                        <div class="alert alert-danger">
                                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="txt_uname_email" placeholder="Felhasználónév" required />
                                    <span id="check-e"></span>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="txt_password" placeholder="Jelszó" />
                                </div>

                                <hr />

                                <div class="form-group">
                                    <button type="submit" name="btn-login" class="btn btn-default">
                                        <i class="glyphicon glyphicon-log-in"></i> &nbsp; Bejelentkezés
                                    </button>
                                </div>  
                                <br />
                                <label>Még nem regisztrált ? <a href="./index.php?r=beregisztracio/bereg">Regisztráljon!</a></label>
                            </form>

                        </div>

                    </div>