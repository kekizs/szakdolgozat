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
                background-color: #676b74;
            }

            footer.page-footer {
                background-color: #676b74;
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
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item btn-group">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown 
                                </a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </nav>
            <!--/.Navbar-->

        </header>
        <div class="container" style="min-height:600px;margin-top: 100px;">
            <div class="row">
                <div class="col-lg-12">
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
                        <h5 class="title mb-3"><strong>About material design</strong></h5>
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

            <!--Call to action-->
            <div class="call-to-action">
                <h4 class="mb-5">Material Design for Bootstrap</h4>
                <ul>
                    <li>
                        <h5>Get our UI KIT for free</h5>
                    </li>
                    <li><a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-primary" rel="nofollow">Sign up!</a></li>
                    <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default" rel="nofollow">Learn more</a></li>
                </ul>
            </div>
            <!--/.Call to action-->

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2015 Copyright: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <script type="text/javascript" src="../../assets/bootstrap-material-design/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../../assets/bootstrap-material-design/js/popper.min.js"></script>
        <script type="text/javascript" src="../../assets/bootstrap-material-design/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../assets/bootstrap-material-design/js/mdb.min.js"></script>
        <script src="./assets/script.js"></script>
    </body>
</html>