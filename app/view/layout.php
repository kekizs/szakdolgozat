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
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="../../assets/logstyle.css" type="text/css"  />
        <link rel="stylesheet" href="../style.css" type="text/css"  />
        <link rel='stylesheet' id='woocommerce-general-css'  href='//mdbootstrap.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='wsl-widget-css'  href='https://mdbootstrap.com/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='compiled.css-css'  href='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled.min.css?ver=4.4.0' type='text/css' media='all' />
        
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
            <nav class="navbar fixed-top navbar-expand-md navbar-dark double-nav scrolling-navbar style">
                <div class="container"  >
                    <a class="navbar-brand" href="./index.php">AndiCake</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="./index.php?r=hir/listaz">Hírek <span class="sr-only">(current)</span></a>
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
                            <?php if ($user == false) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="./index.php?r=bejelentkezes/bejelent">Bejelentkezés</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="Keresés" aria-label="Search">
                        </form>
                        <?php if ($user != false) : ?>
                            <ul class="navbar-nav mr-auto"> 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false"><i class="fa fa-user"></i> 
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-unique" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item waves-effect waves-light" href="./index.php?r=user/modify">Adataim</a>
                                        <a class="dropdown-item waves-effect waves-light" href="./index.php?r=kosar/kosar">Kosár</a>
                                        <a class="dropdown-item waves-effect waves-light" href="./index.php?r=bejelentkezes/logout">Kijelentkezés</a>
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
                        <p>Mi csináljuk a világ legfinomabb tortáit</p>
                        <p>Népszerűségünk folyamatosan növekszik. Vegyél Egyél</p>
                    </div>
                    <!--/.First column-->
                    <hr class="w-100 clearfix d-sm-none">
                    <!--Second column-->
                    <div class="col-lg-2 col-md-6 ml-auto">
                        <h5 class="title mb-3"><strong>Linkek</strong></h5>
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
                        <h5 class="title mb-3"><strong>Linkek</strong></h5>
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
                        <h5 class="title mb-3"><strong>Linkek</strong></h5>
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
        <script type='text/javascript' src='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/ajax-auth-script.js?ver=4.8.1'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/comments-reply-mod.js?ver=4.8.1'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/brandflow-wp/public/js/brandflow-wp-public.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-form-move-tracker.js?ver=1.7.1'></script>
<script type='text/javascript'>
    </body>
</html>