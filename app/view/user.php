
<div class="signin-form">

    <div class="container">

        <form method="post"  action="./index.php?r=user/save"class="form-signin">
            <h2 class="form-signin-heading">Adatmódosítás</h2><hr />

            <!-- <div class="alert alert-danger">
                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error ?>
             </div>-->

           <!-- <div class="alert alert-info">
                <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeresen regisztrált <a href='index.php'>Bejelentkezés</a> here
            </div>-->


            <div class="form-group">
                <input type="text" class="form-control" name="vname" placeholder="vezetéknév" value="<?=$user->vezeteknev; ?>" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="kname" placeholder="keresztnév" value="<?= $user->keresztnev ?>" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="uname" placeholder="felhasználónév" value="<?= $user->username ?>" />
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="e-mail cím" value="<?= $user->email ?>" />
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="tel" placeholder="telefonszám" value="<?= $user->telefonszam?>" />
            </div>
            <div class="form-group">
                <input placeholder="Születési Dátum" type="text" onfocus="(this.type = 'date')" class="form-control" name="szuldatum" placeholder="Sz" value="<?= $user->szuletesi_datum?>" />
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
