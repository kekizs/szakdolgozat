<?php
$length = 50;
?>

<div class="container" style="min-height:600px;margin-top: 100px;">
    <div class="row" >
        <div class="col-lg-12">


            <div class="container">
                <div class="row">

                    <!--Sidebar-->
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

                        <div class="card">
                            <div class="card-body">
                                <div class="widget-wrapper">
                                    <h4>Termékeink:</h4>
                                    <br>
                                    <div class="list-group">
                                        <?php foreach ($kategoriak as $kat) { ?>
                                            <a href="./index.php?r=termekek/katlista/<?= $kat['id'] ?>" class="list-group-item"><?= $kat["kategoria"] ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">

                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>Iratkozzon fel hírlevelünkre</strong></p>
                                    <p>Értesítjük legújabb nyalánkságainkról</p>
                                    <form name="hirlevel" method="post">
                                        <?php
                                        if (isset($error)) {
                                            foreach ($error as $error) {
                                                ?>
                                                <div class="alert alert-danger">
                                                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <div class="md-form">
                                            <i class="fa fa-user prefix"></i>
                                            <input type="text" id="form1" name="nev" class="form-control">
                                            <label for="form1">Neve: </label>
                                        </div>
                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="form2" name="email" class="form-control">
                                            <label for="form2">E-mail címe: </label>
                                        </div>

                                        <button class="btn btn waves-effect waves-light" name="kuldes" style="background-color:#5c3317 ">Küldés</button>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.Sidebar-->

                    <!--Main column-->
                    <div class="col-lg-8">

                        <!--First row-->
                        <div class="row wow fadeIn" data-wow-delay="0.4s">
                            <div class="col-lg-12">
                                <div class="card">
                                    <h2 class="h2-responsive">Újdonságaink</h2>
                                </div>

                                <!--Carousel Wrapper-->
                                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                    <!--Indicators-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                    </ol>
                                    <!--/.Indicators-->
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <!--First slide-->
                                        <div class="carousel-item active">
                                            <img src=".\kepek\1.jpg" alt="First slide" class="img-fluid">
                                            <div class="carousel-caption">
                                                <h4>Valentín napra</h4>
                                                <br>
                                            </div>
                                        </div>
                                        <!--/First slide-->
                                        <!--Second slide-->
                                        <div class="carousel-item">
                                            <img src="./kepek\2.jpg" alt="Second slide" class="img-fluid">
                                            <div class="carousel-caption">
                                                <h4>Esküvőkre!</h4>
                                                <br>
                                            </div>
                                        </div>
                                        <!--/Second slide-->
                                        <!--Third slide-->
                                        <div class="carousel-item">
                                            <img src="./kepek\3.jpg" alt="Third slide" class="img-fluid">
                                            <div class="carousel-caption">
                                                <h4>Csokitorták</h4>
                                                <br>
                                            </div>
                                        </div>
                                        <!--/Third slide-->
                                    </div>
                                    <!--/.Slides-->
                                    <!--Controls-->
                                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                        </div>
                        <!--/.First row-->
                        <br>
                        <hr class="extra-margins">

                        <!--Second row-->
                        <div class="row">
                            <?php foreach ($hirek as $hir) { ?>
                                <!--First columnn-->
                                <div class="col-lg-4">
                                    <!--Card-->
                                    <div class="card wow fadeIn" data-wow-delay="0.2s">

                                        <!--Card image-->
                                        <img class="img-fluid" src="<?= $hir['img']; ?>" alt="Card image cap" style="min-height: 160px;">

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <h4 class="card-title"><?= $hir["cim"] ?></h4>
                                            <!--Text-->
                                            <p class="card-text"><?php
                                                $szoveg = $hir['szoveg'];

                                                if (strlen($szoveg) > $length) {

                                                    $szoveg = substr($szoveg, 0, $length) . "...";
                                                }
                                                echo $szoveg;
                                                ?></p>
                                            <a href="./index.php?r=hir/hir/<?= $hir['id'] ?>"  class="d-flex flex-row-reverse">
                                                <h5 class="waves-effect waves-light p-2">Tovább <i class="fa fa-chevron-right"></i></h5></a>

                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--First columnn-->
                            <?php } ?>

                        </div>
                        <!--/.Second row-->

                    </div>
                    <!--/.Main column-->

                </div>
            </div>

        </div>
    </div>
</div>