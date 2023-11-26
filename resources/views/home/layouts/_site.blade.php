<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="ADS Magazine">
    <meta name="author" content="UOK">
    <meta name="keyword" content="ADS">
    <title>{{ setting('site_title') }}</title>
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

        .bg-blue {
            /* background-color: #626EEF; */
            background: linear-gradient(to bottom, #626EEF, #bbdfff);

        }

        .bg-purple {
            /* background-color: #8e44ad; */
            background: linear-gradient(to bottom, #8e44ad, #bbbcff);
        }

        .bg-default {
            /* background-color: #F73F52; */
            background: linear-gradient(to bottom, #F73F52, #fbb);
        }

        .bg-orange {
            /* background-color: #FC624D; */
            background: linear-gradient(to bottom, #FC6240, #fff8bb);
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
                            <a href="{{ route('home.index') }}">
                                <img src="{{ asset('home/images/logo.png') }}" alt="Magz Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form action="{{ route('search') }}" method="GET" class="search" autocomplete="off">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control"
                                        placeholder="Type something here" value="{{ old('search') }}">
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
                            @auth
                                <li><a href="{{ route('dashboard.home') }}"><i class="ion-person-add"></i>
                                        <div>Dashboard</div>
                                    </a></li>
                                <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">

                                        <i class="ft-power"></i>
                                        <div>logout</div>
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </li>
                            @else
                                <li><a href="{{ route('register') }}"><i class="ion-person-add"></i>
                                        <div>Register</div>
                                    </a></li>
                                <li><a href="{{ route('login') }}"><i class="ion-person"></i>
                                        <div>Login</div>
                                    </a></li>
                            @endauth
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
                        <li><a href="{{ route('categories') }}">Categories</a></li>
                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>

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
                <div class="col-md-6 col-sm-6 col-xs-12">
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
                            <a href="{{ route('about') }}" class="btn btn-magz white">About Us <i
                                    class="ion-ios-arrow-thin-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="block">
                        <h1 class="block-title">Follow Us</h1>
                        <div class="block-body">
                            <p>Follow us and stay in touch to get the latest news</p>
                            <ul class="social trp">
                                @php
                                    $social_sites = ['facebook', 'whatsapp', 'youtube', 'snapchat', 'twitter', 'instagram'];
                                @endphp
                                 @foreach ($social_sites as $social_site)
                                    <li>
                                        <a href="{{ setting($social_site . '_link') }}" class="{{ $social_site }}">
                                            <svg>
                                                <rect width="0" height="0" />
                                            </svg>
                                            <i class="ion-social-{{ $social_site }}"></i>
                                        </a>
                                    </li>
                                @endforeach
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
