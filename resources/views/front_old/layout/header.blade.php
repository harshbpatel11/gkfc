<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GKFC</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fronttheme/assets/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fronttheme/assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fronttheme/assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('fronttheme/assets/images/favicons/site.webmanifest') }}">
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/agrikon-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/nouislider.pips.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('fronttheme/assets/css/main.css') }}">
</head>
<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="{{ asset('fronttheme/assets/images/loader.png') }}" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <p>Welcome to Agriculture HTML Template</p>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <a href="#"><i class="agrikon-icon-email"></i>needhelp@company.com</a>
                        <a href="#"><i class="agrikon-icon-clock"></i>Mon - Sat 8:00 - 6:30, Sunday - CLOSED</a>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="index.html" aria-label="logo image"><img src="{{ asset('fronttheme/assets/images/logo-dark.png') }}" width="153" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a  href="{{url('/')}}">Home</a>
                            {{-- <ul>
                                <li>
                                    <a href="index.html">Home One</a>
                                </li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li class="dropdown">
                                    <a href="#">Header Styles</a>
                                    <ul>
                                        <li><a href="index.html">Header One</a></li>
                                        <li><a href="index-2.html">Header Two</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                        <li>
                            <a href="{{url('/about')}}">About</a>
                        </li>
                        <li class="dropdown"><a href="{{url('/products')}}">Products</a>
                            <ul>
                                <li><a href="{{url('/products')}}">Product</a></li>
                                <li><a href="{{url('/productdetail')}}">Product Details</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{url('/gallarys')}}">Gallery</a>
                            {{-- <ul>
                                <li><a href="{{url('/gallarys')}}">Gallery</a></li>
                                <li><a href="{{url('/gallarydetail')}}">Gallery Details</a></li>
                            </ul> --}}
                        </li>
                        <li class="dropdown"><a href="{{url('/contactus')}}">Contact</a>
                            {{-- <li><a href="">Contact</a></li> --}}
                            {{-- <ul>
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-details.html">News Details</a></li>
                            </ul> --}}
                        </li>
                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">
                        {{-- <a href="#" class="search-toggler main-header__search-btn"><i class="agrikon-icon-magnifying-glass"></i></a>
                        <a class="main-header__cart-btn" href="#"><i class="agrikon-icon-shopping-cart"></i></a> --}}
                        <a href="tel:92-666-888-0000" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text">Call Anytime</span>
                                <span class="main-header__info-phone-title">92 666 888 0000</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->