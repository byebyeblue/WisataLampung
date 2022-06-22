<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- TITLE OF SITE -->
    <title>Travel</title>

    <!-- favicon img -->
    <link rel="shortcut icon" type="image/icon" href="/assets/TourNest-master/assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/font-awesome.min.css" />

    <!--animate.css-->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/animate.css" />

    <!--hover.css-->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/hover-min.css">

    <!--datepicker.css-->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/datepicker.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/owl.theme.default.min.css" />

    <!-- range css-->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/jquery-ui.min.css" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/bootstrap.min.css" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/bootsnav.css" />

    <!--style.css-->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/style.css" />

    <!--responsive.css-->
    <link rel="stylesheet" href="/assets/TourNest-master/assets/css/responsive.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

    <!-- main-menu Start -->
    <header class="top-area">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="/">
                                Wisata<span>Lampung</span>
                            </a>
                        </div><!-- /.logo-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button><!-- / button-->
                            </div><!-- /.navbar-header-->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/">home</a></li>
                                    <li><a href="/daftarharga">Daftar Harga</a></li>
                                    <li><a href="/pemesanan">Pemesanan</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.main-menu-->
                    </div><!-- /.col-->
                </div><!-- /.row -->
                <div class="home-border"></div><!-- /.home-border-->
            </div><!-- /.container-->
        </div><!-- /.header-area -->

    </header><!-- /.top-area-->
    <!-- main-menu End -->


    <!--about-us start -->
    <section id="home" class="about-us">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single-about-us">
                            <div class="about-us-txt">
                                <h2>
                                    Explore the Beauty of the Beautiful Sai Bumi Ruwa Jurai

                                </h2>
                                <div class="about-btn">
                                    <a href="/">
                                        <button class="about-view">
                                            explore now
                                        </button>
                                    </a>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.about-us-txt-->
                        </div>
                        <!--/.single-about-us-->
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.about-us-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.about-us-->
    <!--about-us end -->


    <?= $this->renderSection('content'); ?>

    <!-- footer-copyright start -->
    <footer class="footer-copyright">
        <div class="container">
            <div class="footer-content">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="single-footer-item">
                            <div class="footer-logo">
                                <a href="index.html">
                                    Wisata<span>Lampung</span>
                                </a>
                                <p>
                                    wisata terbaik di Lampung
                                </p>
                            </div>
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                    <div class="col-sm-4">
                        <div class="single-footer-item">
                            <h2>link</h2>
                            <div class="single-footer-txt">
                                <p><a href="/">home</a></p>
                                <p><a href="/daftarharga">Daftar harga</a></p>
                                <p><a href="/pemesanan">pemesanan</a></p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-sm-4">
                        <div class="single-footer-item">
                            <h2>popular destination</h2>
                            <div class="single-footer-txt">
                                <p><a href="/wisata/1">Pulau Pahawang</a></p>
                                <p><a href="/wisata/2">Puncak Mas</a></p>
                                <p><a href="/wisata/3">Alam Wawai</a></p>
                            </div>
                            <!--/.single-footer-txt-->
                        </div>
                        <!--/.single-footer-item-->
                    </div>
                    <!--/.col-->

                </div>
                <!--/.row-->

            </div>
            <!--/.footer-content-->
            <hr>
            <div class="foot-icons ">
                <ul class="footer-social-links list-inline list-unstyled">
                    <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <p>&copy; 2017 <a href="https://www.themesine.com">ThemeSINE</a>. All Right Reserved</p>

            </div>
            <!--/.foot-icons-->
            <div id="scroll-Top">
                <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>
            <!--/.scroll-Top-->
        </div><!-- /.container-->

    </footer><!-- /.footer-copyright-->
    <!-- footer-copyright end -->




    <script src="/assets/TourNest-master/assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script src="/assets/TourNest-master/assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="/assets/TourNest-master/assets/js/bootsnav.js"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="/assets/TourNest-master/assets/js/jquery.filterizr.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="/assets/TourNest-master/assets/js/jquery-ui.min.js"></script>

    <!-- counter js -->
    <script src="/assets/TourNest-master/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/TourNest-master/assets/js/waypoints.min.js"></script>

    <!--owl.carousel.js-->
    <script src="/assets/TourNest-master/assets/js/owl.carousel.min.js"></script>

    <!-- jquery.sticky.js -->
    <script src="/assets/TourNest-master/assets/js/jquery.sticky.js"></script>

    <!--datepicker.js-->
    <script src="/assets/TourNest-master/assets/js/datepicker.js"></script>

    <!--Custom JS-->
    <script src="/assets/TourNest-master/assets/js/custom.js"></script>


</body>

</html>