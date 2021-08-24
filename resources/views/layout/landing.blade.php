<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="APPTON HTML5 Template is a simple Smooth Personal App Landing Template" />
    <meta name="keywords" content="App, Landing, Business, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>Beranda | Bimbel - Taman Belajar</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('') }}template2/img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link href="{{ asset('') }}template2/css/plugins.css" rel="stylesheet">
    <link href="{{ asset('') }}template2/css/theme.css" rel="stylesheet">
    <link href="{{ asset('') }}template2/css/icons.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('') }}template2/style.css" rel="stylesheet">
    <link href="{{ asset('') }}template2/css/responsive.css" rel="stylesheet">

    <script src="{{ asset('') }}template2/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    @yield('container')


    <!--FOOER AREA-->
    <footer class="footer-area sky-gray-bg relative">
        <div class="footer-top-area padding-80-80 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="single-footer footer-about sm-mb50 xs-mb50 sm-center xs-center">
                            <div class="footer-logo mb30">
                                <a href="#"><img src="{{ asset('') }}template2/img/lg.png" alt=""></a>
                            </div>
                            <p>Taman Belajar Merupakan lembaga bimbingan belajar privat yang hadir untuk, memenuhi kebutuhan belajarmu dan menyelesaikan permasalahan dalam belajar</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                        <div class="single-footer footer-list white xs-center xs-mb50">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Privicy Policy</a></li>
                                <li><a href="#">Testmonial</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-8 col-xs-12">
                        <div class="single-footer footer-subscribe white xs-center">
                            <h3 class="mb30 xs-font18"> Newsletter</h3>
                            <p>Kami ada untuk membantu menyukseskan kecerdasan generasi bangsa demi masa depan Indonesia yang lebih Gemilang</p>
                            <div class="subscriber-form-area mt50 wow fadeIn">
                                <!--<form action="#" class="subscriber-form mb100">
                                    <input type="email" name="email" id="email" placeholder="Email Address">
                                    <button type="submit">Subscribe</button>
                                </form>-->
                                <form id="mc-form" class="subscriber-form">
                                    <label class="mt10" for="mc-email"></label>
                                    <input type="email" id="mc-email" placeholder="email@example.com">
                                    <button type="submit" class="plus-btn"><i class="fa fa-paper-plane-o"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | <i class="" aria-hidden="true"></i> by <a href="" target="_blank">Iin Asnawiyah </a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="{{ asset('') }}template2/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('') }}template2/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="{{ asset('') }}template2/js/vendor/jquery.easing.1.3.js"></script>
    <script src="{{ asset('') }}template2/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset('') }}template2/js/vendor/jquery.appear.js"></script>
    <script src="{{ asset('') }}template2/js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}template2/js/stellar.js"></script>
    <script src="{{ asset('') }}template2/js/waypoints.min.js"></script>
    <script src="{{ asset('') }}template2/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('') }}template2/js/wow.min.js"></script>
    <script src="{{ asset('') }}template2/js/jquery-modal-video.min.js"></script>
    <script src="{{ asset('') }}template2/js/stellarnav.min.js"></script>
    <script src="{{ asset('') }}template2/js/placeholdem.min.js"></script>
    <script src="{{ asset('') }}template2/js/contact-form.js"></script>
    <script src="{{ asset('') }}template2/js/jquery.ajaxchimp.js"></script>
    <script src="{{ asset('') }}template2/js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="{{ asset('') }}template2/js/main.js"></script>

    <!--===== MAPS JS=====-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&sensor=false"></script>
    <script src="{{ asset('') }}template2/js/maps.active.js"></script>
</body>

</html>