<!doctype html>
<html lang="en">

<head>
    <title>@yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{!! asset ('/fonts/icomoon/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset ('/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset ('/css/bootstrap-datepicker.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset ('/css/jquery.fancybox.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset ('/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset ('/css/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset ('/fonts/flaticon/font/flaticon.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset ('/css/aos.css') !!}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset ('/css/style.css') !!}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="10">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-2">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar site-navbar-target" role="banner">


            <div class="container mb-3">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto">
                        <a style="font-weight: bold; font-size: 50px">E - Volunteer Social Class <span class="text-primary">.</span></a>
                    </div>
                    <div class="site-quick-contact d-none d-lg-flex ml-auto ">
                        <div class="d-flex site-info align-items-center">
                            <span class="block-icon mr-3"><img src="/images/baseline_emoji_nature_white_18dp.png"></span>
                            <span style="padding-right: 15px; font-size: 15px">Terimakasih<br> Volunteer!<br></span>
                            <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                            <span>Jatibarang, Indramayu, <br> Jawa Barat, Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="menu-wrap d-flex align-items-center">
                    <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>



                    <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto ">
                            <li><a href=" {{ url('/')}} " class="nav-link">Home</a></li>
                            <li><a href=" {{ url('/act')}} " class="nav-link">Aktivitas</a></li>
                            <li><a href="{{ url('/volunteer')}}" class="nav-link">Volunteer</a></li>
                            <li><a href="{{ url('/about')}}" class="nav-link">Tentang Kami</a></li>
                        </ul>
                    </nav>

                    <div class="top-social ml-auto">
                        <!-- <a href="#"><span class="icon-facebook text-teal"></span></a>
                        <a href="#"><span class="icon-twitter text-success"></span></a>
                        <a href="#"><span class="icon-linkedin text-yellow"></span></a> -->
                        <a type="button" class="btn btn-outline-info" href="{{ url('/login')}}">Login</a>
                        <a type="button" class="btn btn-info" href="{{ url('/register')}}">Register</a>
                    </div>
                </div>
            </div>



        </header>

      @yield('container');

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="footer-heading mb-3">Sweet Regards</h2>
                        <p class="mb-5">  “Remember that the happiest people are not those getting more, but those giving more.” ― H. Jackson Brown Jr. </p>

                        <h2 class="footer-heading mb-4">Newsletter</h2>
                        <form action="#" class="d-flex" class="subscribe">
                            <input type="text" class="form-control mr-3" placeholder="Email">
                            <input type="submit" value="Send" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-4 ml-auto">
                                <h2 class="footer-heading mb-4">Navigation</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Volunteer</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Join with Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h2 class="footer-heading mb-4">Navigation</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Volunteer</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Join with Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> E - Volunteer Social Class
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="{!! asset ('/js/jquery-3.3.1.min.js') !!}"></script>
    <script src="{!! asset ('/js/jquery-migrate-3.0.0.js') !!}"></script>
    <script src="{!! asset ('/js/popper.min.js') !!}"></script>
    <script src="{!! asset ('/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset ('/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset ('/js/jquery.sticky.js') !!}"></script>
    <script src="{!! asset ('/js/jquery.waypoints.min.js') !!}"></script>
    <script src="{!! asset ('/js/jquery.animateNumber.min.js') !!}"></script>
    <script src="{!! asset ('/js/jquery.fancybox.min.js') !!}"></script>
    <script src="{!! asset ('/js/jquery.stellar.min.js') !!}"></script>
    <script src="{!! asset ('/js/jquery.easing.1.3.js') !!}"></script>
    <script src="{!! asset ('/js/bootstrap-datepicker.min.js') !!}"></script>
    <script src="{!! asset ('/js/aos.js') !!}"></script>

    <script src="{!! asset ('/js/main.js') !!}"></script>

</body>

</html>