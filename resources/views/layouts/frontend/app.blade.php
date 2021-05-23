<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jerin - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/favicon.ico') }}">
    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/lib/css/nivo-slider.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/lib/css/preview.css') }}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/demo.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/menu_elastic.css') }}"/>
    <script src="{{ asset('assets/frontend/css/animate.css') }}assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div class="canvas-wrapper">
    <div class="content-wrap">
        <div class="content">
            <!-- header start -->
            <header class="header-area home-style-2">
                <div class="header-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-3 col-xs-6">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/frontend/img/logo/logo-black.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-9 col-xs-6">
                                <div class="cart-menu">
                                    <div class="user user-style-3 f-right">
                                        <a href="#" id="open-button">
                                            <i class="pe-7s-menu"></i>
                                        </a>
                                    </div>
                                    <div class="search-style-2 f-right">
                                        <a class="icon-search-2" href="#">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                        <div class="search2-content">
                                            <form action="#">
                                                <div class="search-input-button2">
                                                    <input class="" placeholder="Search" type="search">
                                                    <button class="search-button2" type="submit">
                                                        <i class="pe-7s-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="shopping-cart f-right">
                                        <a class="top-cart" href="cart.html"><i class="pe-7s-cart"></i></a>
                                        <span>01</span>
                                        <ul>
                                            <li>
                                                <div class="cart-img-price">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""/></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h3><a href="#">Headphone</a></h3>
                                                        <span class="cart-price">1 x $ 299.00</span>
                                                    </div>
                                                    <div class="cart-del">
                                                        <i class="pe-7s-close-circle"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <p class="total">
                                                    Subtotal:
                                                    <span>$299.00</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="buttons">
                                                    <a class="my-cart" href="cart.html">View Cart</a>
                                                    <a class="checkout" href="checkout.html">Checkout</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-menu f-right">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <a href="{{ url('/') }}">home</a>
                                                </li>
                                                <li><a href="#">API Documentation</a>
                                                    <ul class="dropdown">
                                                        <li><a href="about-us.html">about us </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li>
                                            <a class="active1" href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="active1"><a class="active1" href="#">API Documentation</a>
                                            <ul>
                                                <li><a href="#">about us </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->
            <!-- shop area start -->
            <div class="portfolio-area pt-100 pb-70">
                <div class="container">
                    <div class="section-title text-center mb-50">
                        <h2>New Collections <i class="fa fa-shopping-cart"></i></h2>
                    </div>
                    <div class="row portfolio-style-2">
                        <div class="grid">
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <a href="#"><img src="{{ asset('assets/frontend/img/shop/electronics/1.jpg') }}" alt=""/></a>
                                        <div class="shop-quick-view">
                                            <a href="#" data-toggle="modal" data-target="#quick-view"
                                               title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                        <div class="price-up-down">
                                            <span class="sale-new">sale</span>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" title="Add to Cart">
                                                <i class="pe-7s-cart"></i>
                                                add to cart
                                            </a>
                                            <a class="wishlist" href="#" title="Wishlist">
                                                <i class="pe-7s-like"></i>
                                                Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-text-all">
                                        <div class="title-color fix">
                                            <div class="shop-title f-left">
                                                <h3><a href="#">PC Headphone</a></h3>
                                            </div>
                                            <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                        </div>
                                        <div class="fix">
                                            <span class="f-left">Electronics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <a href="#"><img src="{{ asset('assets/frontend/img/shop/electronics/2.jpg') }}" alt=""/></a>
                                        <div class="shop-quick-view">
                                            <a href="#" data-toggle="modal" data-target="#quick-view"
                                               title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" title="Add to Cart">
                                                <i class="pe-7s-cart"></i>
                                                add to cart
                                            </a>
                                            <a class="wishlist" href="#" title="Wishlist">
                                                <i class="pe-7s-like"></i>
                                                Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-text-all">
                                        <div class="title-color fix">
                                            <div class="shop-title f-left">
                                                <h3><a href="#">Table Lamp</a></h3>
                                            </div>
                                            <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                        </div>
                                        <div class="fix">
                                            <span class="f-left">Electronics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <a href="#"><img src="{{ asset('assets/frontend/img/shop/electronics/3.jpg') }}" alt=""/></a>
                                        <div class="shop-quick-view">
                                            <a href="#" data-toggle="modal" data-target="#quick-view"
                                               title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                        <div class="price-up-down">
                                            <span class="sale-new">-30%</span>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" title="Add to Cart">
                                                <i class="pe-7s-cart"></i>
                                                add to cart
                                            </a>
                                            <a class="wishlist" href="#" title="Wishlist">
                                                <i class="pe-7s-like"></i>
                                                Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-text-all">
                                        <div class="title-color fix">
                                            <div class="shop-title f-left">
                                                <h3><a href="#">Man Watch</a></h3>
                                            </div>
                                            <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                        </div>
                                        <div class="fix">
                                            <span class="f-left">Electronics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <a href="#"><img src="{{ asset('assets/frontend/img/shop/electronics/3.jpg') }}" alt=""/></a>
                                        <div class="shop-quick-view">
                                            <a href="#" data-toggle="modal" data-target="#quick-view"
                                               title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" title="Add to Cart">
                                                <i class="pe-7s-cart"></i>
                                                add to cart
                                            </a>
                                            <a class="wishlist" href="#" title="Wishlist">
                                                <i class="pe-7s-like"></i>
                                                Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-text-all">
                                        <div class="title-color fix">
                                            <div class="shop-title f-left">
                                                <h3><a href="#">Lorem ips</a></h3>
                                            </div>
                                            <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                        </div>
                                        <div class="fix">
                                            <span class="f-left">Electronics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <a href="#"><img src="{{ asset('assets/frontend/img/shop/electronics/3.jpg') }}" alt=""/></a>
                                        <div class="shop-quick-view">
                                            <a href="#" data-toggle="modal" data-target="#quick-view"
                                               title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" title="Add to Cart">
                                                <i class="pe-7s-cart"></i>
                                                add to cart
                                            </a>
                                            <a class="wishlist" href="#" title="Wishlist">
                                                <i class="pe-7s-like"></i>
                                                Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-text-all">
                                        <div class="title-color fix">
                                            <div class="shop-title f-left">
                                                <h3><a href="#">Table Fan</a></h3>
                                            </div>
                                            <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                        </div>
                                        <div class="fix">
                                            <span class="f-left">Electronics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <a href="#"><img src="{{ asset('assets/frontend/img/shop/electronics/3.jpg') }}" alt=""/></a>
                                        <div class="shop-quick-view">
                                            <a href="#" data-toggle="modal" data-target="#quick-view"
                                               title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                        <div class="price-up-down">
                                            <span class="sale-new">new</span>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" title="Add to Cart">
                                                <i class="pe-7s-cart"></i>
                                                add to cart
                                            </a>
                                            <a class="wishlist" href="#" title="Wishlist">
                                                <i class="pe-7s-like"></i>
                                                Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-text-all">
                                        <div class="title-color fix">
                                            <div class="shop-title f-left">
                                                <h3><a href="#">Handbag</a></h3>
                                            </div>
                                            <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                        </div>
                                        <div class="fix">
                                            <span class="f-left">Electronics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <a href="#"><img src="{{ asset('assets/frontend/img/shop/electronics/3.jpg') }}" alt=""/></a>
                                        <div class="shop-quick-view">
                                            <a href="#" data-toggle="modal" data-target="#quick-view"
                                               title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" title="Add to Cart">
                                                <i class="pe-7s-cart"></i>
                                                add to cart
                                            </a>
                                            <a class="wishlist" href="#" title="Wishlist">
                                                <i class="pe-7s-like"></i>
                                                Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-text-all">
                                        <div class="title-color fix">
                                            <div class="shop-title f-left">
                                                <h3><a href="#">Micro Woven</a></h3>
                                            </div>
                                            <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                        </div>
                                        <div class="fix">
                                            <span class="f-left">Electronics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 mb-30">
                                <div class="single-shop">
                                    <div class="shop-img">
                                        <a href="#"><img src="{{ asset('assets/frontend/img/shop/electronics/3.jpg') }}" alt=""/></a>
                                        <div class="shop-quick-view">
                                            <a href="#" data-toggle="modal" data-target="#quick-view"
                                               title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                        <div class="price-up-down">
                                            <span class="sale-new">-50%</span>
                                        </div>
                                        <div class="button-group">
                                            <a href="#" title="Add to Cart">
                                                <i class="pe-7s-cart"></i>
                                                add to cart
                                            </a>
                                            <a class="wishlist" href="#" title="Wishlist">
                                                <i class="pe-7s-like"></i>
                                                Wishlist
                                            </a>
                                        </div>
                                    </div>
                                    <div class="shop-text-all">
                                        <div class="title-color fix">
                                            <div class="shop-title f-left">
                                                <h3><a href="#">PC Headphone</a></h3>
                                            </div>
                                            <span class="price f-right">
                                                    <span class="new">$120.00</span>
                                                </span>
                                        </div>
                                        <div class="fix">
                                            <span class="f-left">Electronics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop area end -->
            <!-- footer area start -->
            <hr class="container bg-danger">
            <footer class="footer-area">
                <div class="container">
                    <div class="footer-top pt-60 pb-30">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="footer-widget mb-30">
                                    <div class="footer-logo">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('assets/frontend/img/logo/logo-black.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="widget-info">
                                        <p>
                                            <i class="pe-7s-mail"></i>
                                            <span>
                                                    <a href="mailto:contact@company.com">contact@company.com</a>
                                                </span>
                                        </p>
                                        <p>
                                            <i class="pe-7s-call"></i>
                                            <span>+001 2233 456 </span>
                                        </p>
                                    </div>
                                    <div class="footer-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 hidden-sm">
                                <div class="footer-widget mb-30">
                                    <div class="footer-title">
                                        <h3>Categories</h3>
                                    </div>
                                    <div class="widget-text">
                                        <ul>
                                            <li><a href="#"> Clothing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="footer-widget mb-30">
                                    <div class="footer-title">
                                        <h3>services</h3>
                                    </div>
                                    <div class="widget-text">
                                        <ul>
                                            <li><a href="#">About Us </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="footer-widget mb-30">
                                    <div class="footer-title">
                                        <h3>Quick Links</h3>
                                    </div>
                                    <div class="widget-text">
                                        <ul>
                                            <li><a href="#">Login </a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="footer-widget mb-30">
                                    <div class="footer-title">
                                        <h3>Company</h3>
                                    </div>
                                    <div class="widget-text">
                                        <ul>
                                            <li><a href="#">Return Policy </a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom ptb-20">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="copyright">
                                    <p>
                                        Copyright © 2018
                                        <a href="#"> themeglass</a>
                                        . All Rights Reserved.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="payment f-right">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer area end -->
        </div>
        <!-- content end -->
    </div>
    <!-- content-wrap end -->
</div>
<!-- all js here -->
<script src="{{ asset('assets/frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/snap.svg-min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/js/jquery.nivo.slider.js') }}"></script>
<script src="{{ asset('assets/frontend/lib/home.js') }}"></script>
<script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
<script src="{{ asset('assets/frontend/js/classie.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main3.js') }}"></script>
</body>
</html>
