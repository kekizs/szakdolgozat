<?php
require_once("./app/model/beregisztracioModel.php");
$user = new beregisztracioModel();


if ($user->is_loggedin()) {
    $user->redirect('index.php');
}

if (isset($_POST['regisztracio'])) {
    $vname = strip_tags($_POST['vname']);
    $kname = strip_tags($_POST['kname']);
    $uname = strip_tags($_POST['uname']);
    $email = strip_tags($_POST['email']);
    $pass = strip_tags($_POST['pass']);
    $telefon = ($_POST['tel']);
    $szuldatum = ($_POST['szuldatum']);

    if ($uname == "") {
        $error[] = "Meg kell adni egy felhasználónevet !";
    }  else if ($email == "") {
      $error[] = "Meg kell adni egy e-mail címet !";
      }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Valós e-mail címet adj meg !';
      } else if ($pass == "") {
      $error[] = "Meg kell adni egy jelszót !";
      } else if (strlen($pass) < 6) {
      $error[] = "Legalább 6 karakter hosszúnak kell lennie a jelszónak";
      }  else {
        try {
            $pdo = Application::getConnection();
            $stmt = $pdo->prepare("SELECT username, email FROM user WHERE username=:uname OR email=:email");
            $stmt->execute(array(':uname' => $uname, ':email' => $email));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            

            if ($user->register($vname, $kname, $uname, $reg_datum, $pass, $telefon, $email, $szuldatum)) {
                $user->redirect('index.php');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>


<div class="signin-form">

    <div class="container">

        <form method="post" class="form-signin">
            <h2 class="form-signin-heading">Regisztráció</h2><hr />
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                    </div>
                    <?php
                }
            } else if (isset($_GET['joined'])) {
                ?>
                <div class="alert alert-info">
                    <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeresen regisztrált <a href='index.php'>Bejelentkezés</a> here
                </div>
                <?php
            }
            ?>

            <div class="form-group">
                <input type="text" class="form-control" name="vname" placeholder="Vezetéknév" value="<?php if (isset($error)) {
                echo $vname;
            } ?>" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="kname" placeholder="Keresztnév" value="<?php if (isset($error)) {
                echo $kname;
            } ?>" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="uname" placeholder="Felhasználónév" value="<?php if (isset($error)) {
                echo $uname;
            } ?>" />
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="E-mail cím" value="<?php if (isset($error)) {
                echo $email;
            } ?>" />
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="tel" placeholder="Telefonszám: +36" value="<?php if (isset($error)) {
                           echo $telefon;
                       } ?>" />
            </div>
            <div class="form-group">
                <input placeholder="Születési Dátum" type="text" onfocus="(this.type = 'date')" class="form-control" name="szuldatum" placeholder="Születési Dátum" value="<?php if (isset($error)) {
                           echo $szuldatum;
                       } ?>" />
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="Jelszó" />
            </div
            <div class="clearfix"></div><hr />
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="regisztracio">
                    <i class="glyphicon glyphicon-open-file"></i>&nbsp;regisztráció
                </button>
            </div>
            <br />
            <label>Regisztrált már? <a href="./index.php?r=bejelentkezes/bejelent">Bejelentkezés</a></label>
        </form>
    </div>
</div>
