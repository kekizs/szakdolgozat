

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
                                    <button type="submit" name="btn-login" class="btn btn waves-effect waves-light" style="background-color:#5c3317 ">
                                        <i class="glyphicon glyphicon-log-in"></i> &nbsp; Bejelentkezés
                                    </button>
                                </div>  
                                <br />
                                <label>Még nem regisztrált ? <a href="./index.php?r=beregisztracio/bereg">Regisztráljon!</a></label>
                            </form>

                        </div>

                    </div>