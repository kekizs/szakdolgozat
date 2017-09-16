<?php
require_once("./app/model/userModel.php");
$user = new userModel();


if ($user->is_loggedin()) {


    if (isset($_POST['modositas'])) {
        $vname = strip_tags($_POST['vname']);
        $kname = strip_tags($_POST['kname']);
        $uname = strip_tags($_POST['uname']);
        $email = strip_tags($_POST['email']);
        $telefon = ($_POST['tel']);
        $szuldatum = ($_POST['szuldatum']);

        if ($user->modify($vname, $kname, $uname, $reg_datum, $telefon, $email, $szuldatum)) {
            $user->redirect('user.php');
        }
    }
}
/*
foreach ($pdo->query($stmt) as $row) {
    $result[] = new lekerdez($row);
}
    $leker->id=$id;
    foreach ($result as $leker)
        */
?>
<div class="signin-form">

    <div class="container">

        <form method="post" class="form-signin">
            <h2 class="form-signin-heading">Adatmódosítás</h2><hr />

            <!-- <div class="alert alert-danger">
                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error ?>
             </div>-->

           <!-- <div class="alert alert-info">
                <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeresen regisztrált <a href='index.php'>Bejelentkezés</a> here
            </div>-->


            <div class="form-group">
                <input type="text" class="form-control" name="vname" placeholder="vezetéknév" value="<?php $leker->vnev ?>" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="kname" placeholder="keresztnév" value="<?php $leker->knev ?>" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="uname" placeholder="felhasználónév" value="<?php $leker->uname ?>" />
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="e-mail cím" value="" />
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="tel" placeholder="telefonszám" value="" />
            </div>
            <div class="form-group">
                <input placeholder="Születési Dátum" type="text" onfocus="(this.type = 'date')" class="form-control" name="szuldatum" placeholder="Sz" value="" />
            </div>

            <div class="clearfix"></div><hr />
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="modositas">
                    <i class="glyphicon glyphicon-open-file"></i>&nbsp;Módosítás
                </button>
            </div>
            <br />
        </form>
    </div>
</div>
