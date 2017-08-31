<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="../../assets/bootstrap-material-design/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="../../assets/bootstrap-material-design/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="../../assets/bootstrap-material-design/css/style.css" rel="stylesheet">
        <style rel="stylesheet">
            /* TEMPLATE STYLES */

            main {
                padding-top: 3rem;
                padding-bottom: 2rem;
            }

            .widget-wrapper {
                padding-bottom: 2rem;
                border-bottom: 1px solid #e0e0e0;
                margin-bottom: 2rem;
            }

            .reviews {
                text-align: center;
                border-top: 1px solid #e0e0e0;
                border-bottom: 1px solid #e0e0e0;
                padding: 1rem;
                margin-top: 1rem;
                margin-bottom: 2rem;
            }

            .price {
                position: absolute;
                left: 0;
                top: 0;
                margin-top: -2px;
            }

            .price .tag {
                margin: 0;
            }

            .navbar {
                background-color: #4E2E28;
            }

            footer.page-footer {
                background-color: #4E2E28;
                margin-top: 2rem;
            }
            .card {
                font-weight: 300;
            }
            .navbar .btn-group .dropdown-menu a:hover {
                color: #000 !important;
            }
            .navbar .btn-group .dropdown-menu a:active {
                color: #fff !important;
            }
        </style>
    </head>
    <body class="fixed-sn mdb-skin-custom" data-spy="scroll" data-target="#scrollspy" data-offset="15">
        <header>

            <!--Navbar-->
            <nav class="navbar fixed-top navbar-expand-md navbar-dark double-nav scrolling-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">AndiCake</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="./index.php?r=hir/hir">Hírek <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php?r=termekek/lista">Termékeink</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tortakészítés</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php?r=tortenelem/tori">Tortatörténelem</a>
                            </li>
                            
                            <li class="nav-item btn-group">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Letöltés 
                                </a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Képeslap</a>
                                    <a class="dropdown-item" href="#">Receptek</a>
                                    
                                </div>
                            </li>
                          
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Keresés" aria-label="Search">
                        </form>
                        <ul class="navbar-nav mr-auto"> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa fa-user"></i> 
                        </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-unique" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item waves-effect waves-light" href="#">Adataim</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Kosár</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Kijelentkezés</a>
                        </ul>
                            
                            </div>
                        </li>
                        
                    </div>
                </div>
            </nav>
            <!--/.Navbar-->

        </header>
        <div class="container" style="min-height:600px;margin-top: 100px;">
            <div class="row">
                <div class="col-lg-12">
                    
                    
                    <div class="container">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

                    <div class="widget-wrapper">
                        <h4>Categories:</h4>
                        <br>
                        <div class="list-group">
                            <a href="#" class="list-group-item">Woman</a>
                            <a href="#" class="list-group-item">Man</a>
                            <a href="#" class="list-group-item">Shoes</a>
                            <a href="#" class="list-group-item">T-shirt</a>
                            <a href="#" class="list-group-item">Jewellery</a>
                        </div>
                    </div>

                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <h4>Subscription form:</h4>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <p><strong>Subscribe to our newsletter</strong></p>
                                <p>Once a week we will send you a summary of the most useful news</p>
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form1" class="form-control">
                                    <label for="form1">Your name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Your email</label>
                                </div>
                                <button class="btn btn-default">Submit</button>

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
                            <div class="divider-new">
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
                                        <img src="http:\\localhost\kepek\1.jpg" alt="First slide" class="img-fluid">
                                        <div class="carousel-caption">
                                            <h4>Valentín napra</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/First slide-->
                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <img src="http:\\localhost\kepek\2.jpg" alt="Second slide" class="img-fluid">
                                        <div class="carousel-caption">
                                            <h4>Esküvőkre!</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <!--/Second slide-->
                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <img src="http:\\localhost\kepek\3.jpg" alt="Third slide" class="img-fluid">
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
                        <!--First columnn-->
                        <div class="col-lg-4">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s">

                                <!--Card image-->
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(32).jpg" alt="Card image cap">

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title">Product title</h4>
                                    <!--Text-->
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-default">Buy now for <strong>10$</strong></a>
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->

                        <!--Second columnn-->
                        <div class="col-lg-4">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.4s">

                                <!--Card image-->
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" alt="Card image cap">

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title">Product title</h4>
                                    <!--Text-->
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-default">Buy now for <strong>30$</strong></a>
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--Second columnn-->

                        <!--Third columnn-->
                        <div class="col-lg-4">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.6s">

                                <!--Card image-->
                                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(1).jpg" alt="Card image cap">

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title">Product title</h4>
                                    <!--Text-->
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.
                                    </p>
                                    <a href="#" class="btn btn-default">Buy now for <strong>20$</strong></a>
                                </div>

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Third columnn-->
                    </div>
                    <!--/.Second row-->

                </div>
                <!--/.Main column-->

            </div>
        </div>
                    
                    <?php
                    
                  
                   echo $content;
                    ?>
                </div>
            </div>
        </div>
        <footer class="page-footer center-on-small-only">

            <!--Footer links-->
            <div class="container-fluid">
                <div class="row">
                    <!--First column-->
                    <div class="col-lg-3 col-md-6 ml-auto">
                        <h5 class="title mb-3"><strong>Rólunk</strong></h5>
                        <p>Material Design (codenamed Quantum Paper) is a design language developed by Google.</p>
                        <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                            and JS framework - Bootstrap.</p>
                    </div>
                    <!--/.First column-->
                    <hr class="w-100 clearfix d-sm-none">
                    <!--Second column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h5 class="title mb-3"><strong>First column</strong></h5>
                        <ul>
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Second column-->
                    <hr class="w-100 clearfix d-sm-none">
                    <!--Third column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h5 class="title mb-3"><strong>Second column</strong></h5>
                        <ul>
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Third column-->
                    <hr class="w-100 clearfix d-sm-none">
                    <!--Fourth column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h5 class="title mb-3"><strong>Third column</strong></h5>
                        <ul>
                            <li>
                                <a href="#!">Link 1</a>
                            </li>
                            <li>
                                <a href="#!">Link 2</a>
                            </li>
                            <li>
                                <a href="#!">Link 3</a>
                            </li>
                            <li>
                                <a href="#!">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->
                </div>
            </div>
            <!--/.Footer links-->
            <hr>

      

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2015 Copyright: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../assets/bootstrap-material-design/js/popper.min.js"></script>
        <script type="text/javascript" src="../../assets/bootstrap-material-design/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../assets/bootstrap-material-design/js/mdb.min.js"></script>
        <script src="./assets/script.js"></script>
    </body>
</html>