<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="ADS Magazine">
    <meta name="author" content="UOK">
    <meta name="keyword" content="ADS">
    <title>ADS</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('home/scripts/bootstrap/bootstrap.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('home/scripts/ionicons/css/ionicons.min.css') }}">
    <!-- Toast -->
    <link rel="stylesheet" href="{{ asset('home/scripts/toast/jquery.toast.min.css') }}">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="{{ asset('home/scripts/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/scripts/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('home/scripts/magnific-popup/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('home/scripts/sweetalert/dist/sweetalert.css') }}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/skins/all.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/demo.css') }}">
    <style>
        .firstbar {
            background-color: #F73F52
        }

        .menu {
            /* background-color: #fffd70; */
        }

        .bg-blue{
            background-color: #626EEF;
        }.bg-purple{
            background-color: #8e44ad;
        }.bg-default{
            background-color: #F73F52;

        }.bg-orange{
            background-color: #FC624D;
        }
    </style>
    @yield('styles')
</head>

<body class="skin-orange">
    <header class="primary">
        <div class="firstbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="brand">
                            <a href="index.html">
                                <img src="{{ asset('home/images/logo.png') }}" alt="Magz Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form class="search" autocomplete="off">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control"
                                        placeholder="Type something here">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="ion-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="help-block">
                                <div></div>
                                <ul>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 text-right">
                        <ul class="nav-icons">
                            <li><a href="register.html"><i class="ion-person-add"></i>
                                    <div>Register</div>
                                </a></li>
                            <li><a href="login.html"><i class="ion-person"></i>
                                    <div>Login</div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start nav -->
        <nav class="menu">
            <div class="container">
                <div class="brand">
                    <a href="#">
                        <img src="{{ asset('home/images/logo.png') }}" alt="Magz Logo">
                    </a>
                </div>
                <div class="mobile-toggle">
                    <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
                </div>
                <div class="mobile-toggle">
                    <a href="#" data-toggle="sidebar" data-target="#sidebar"><i
                            class="ion-ios-arrow-left"></i></a>
                </div>
                <div id="menu-list">
                    <ul class="nav-list">
                        <li class="for-tablet nav-title"><a>Menu</a></li>
                        <li class="for-tablet"><a href="login.html">Login</a></li>
                        <li class="for-tablet"><a href="register.html">Register</a></li>
                        <li><a href="{{ route('home.index') }}">Home</a></li>
                        <li><a href="">Categories</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End nav -->
    </header>

    @yield('content')

    <!-- Start footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="block">
                        <h1 class="block-title"> Info</h1>
                        <div class="block-body">
                            <figure class="foot-logo">
                                <img src="{{ asset('home/images/logo-light.png') }}" class="img-responsive"
                                    alt="Logo">
                            </figure>
                            <p class="brand-description">
                                ADS magazine
                            </p>
                            <a href="page.html" class="btn btn-magz white">About Us <i
                                    class="ion-ios-arrow-thin-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">

                    <div class="block">
                        <h1 class="block-title">Newsletter</h1>
                        <div class="block-body">
                            <p>By subscribing you will receive new articles in your email.</p>
                            <form class="newsletter">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="ion-ios-email-outline"></i>
                                    </div>
                                    <input type="email" class="form-control email" placeholder="Your mail">
                                </div>
                                <button class="btn btn-primary btn-block white">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="block">
                        <h1 class="block-title">Follow Us</h1>
                        <div class="block-body">
                            <p>Follow us and stay in touch to get the latest news</p>
                            <ul class="social trp">
                                <li>
                                    <a href="#" class="facebook">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-twitter-outline"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="youtube">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-youtube-outline"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="googleplus">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-googleplus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-instagram-outline"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tumblr">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-tumblr"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dribbble">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="skype">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-skype"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rss">
                                        <svg>
                                            <rect width="0" height="0" />
                                        </svg>
                                        <i class="ion-social-rss"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        COPYRIGHT &copy; ADS 2023. ALL RIGHT RESERVED.
                        <div>
                            Made with <i class="ion-heart"></i> by <a href="">UOK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <script src="{{ asset('home/js/jquery.js') }}"></script>
    <script src="{{ asset('home/js/jquery.migrate.js') }}"></script>
    <script src="{{ asset('home/scripts/bootstrap/bootstrap.min.js') }}"></script>
    <script>
        var $target_end = $(".best-of-the-week");
    </script>
    <script src="{{ asset('home/scripts/jquery-number/jquery.number.min.js') }}"></script>
    <script src="{{ asset('home/scripts/owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/scripts/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('home/scripts/easescroll/jquery.easeScroll.js') }}"></script>
    <script src="{{ asset('home/scripts/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('home/scripts/toast/jquery.toast.min.js') }}"></script>
    <script src="{{ asset('home/js/demo.j') }}s"></script>
    <script src="{{ asset('home/js/e-magz.js') }}"></script>

    <script>
        (function($) {
            "use strict";

            // Dropdown on mouse hover
            $(document).ready(function() {
                function toggleNavbarMethod() {
                    if ($(window).width() > 992) {
                        $('.navbar .dropdown').on('mouseover', function() {
                            $('.dropdown-toggle', this).trigger('click');
                        }).on('mouseout', function() {
                            $('.dropdown-toggle', this).trigger('click').blur();
                        });
                    } else {
                        $('.navbar .dropdown').off('mouseover').off('mouseout');
                    }
                }
                toggleNavbarMethod();
                $(window).resize(toggleNavbarMethod);
            });


            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 1500, 'easeInOutExpo');
                return false;
            });


            // Tranding carousel
            $(".tranding-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 2000,
                items: 1,
                dots: false,
                loop: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left"></i>',
                    '<i class="fa fa-angle-right"></i>'
                ]
            });


            // Carousel item 1
            $(".carousel-item-1").owlCarousel({
                autoplay: true,
                smartSpeed: 1500,
                items: 1,
                dots: false,
                loop: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ]
            });

            // Carousel item 2
            $(".carousel-item-2").owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                margin: 30,
                dots: false,
                loop: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    768: {
                        items: 2
                    }
                }
            });


            // Carousel item 3
            $(".carousel-item-3").owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                margin: 30,
                dots: false,
                loop: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });


            // Carousel item 4
            $(".carousel-item-4").owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                margin: 30,
                dots: false,
                loop: true,
                nav: true,
                navText: [
                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });

        })(jQuery);
    </script>
    @stack('scripts')
</body>

</html>
