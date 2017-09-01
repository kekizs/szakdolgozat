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
                            <?php if ($user==false) : ?>
                                <li class="nav-item">
                                <a class="nav-link" href="./index.php?r=tortenelem/tori">Bejelentkezés</a>
                            </li>
                          <?php endif; ?>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Keresés" aria-label="Search">
                        </form>
                        <?php if ($user!=false) : ?>
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
                          <?php endif; ?>   
                            </div>
                        </li>
                        
                    </div>
                </div>
            </nav>
            <!--/.Navbar-->

        </header>
       
        <div class="container valami" >    
                    <?php
                    
                  
                   echo $content;
                    ?>
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