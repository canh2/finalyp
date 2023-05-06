


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<title>Al-Sultan</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
{{-- <link rel="shortcut icon" type="image/x-icon" href=""> --}}
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}"></head>
@livewireStyles
</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                        <ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Experience the ultimate hookah journey with us </li>
                                    <li>100% Satisfaction Guaranteed</li>
                                    <li>WARNING: This product contains NICOTINE. NICOTINE is an addictive chemical. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                            <ul>
                                <li><i class="fi-rs-user"></i> {{Auth::user()->name}} /
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                         <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">logout</a>
                                    </form>
                                    </li>
                            </ul>
                            @else
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a>  / <a href="{{route('register')}}">Sign Up</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width">
                       <div class="logo-width1">
                        <div class="cocologo">
                        <a href="index.html"><img src="{{asset('assets/imgs/logo/logococo.jpg')}}" alt="logo"></a>
                    </div>
                </div>
                    </div>
                    <div class="header-right">
                     @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                               @livewire('wishlist-icon-component')
                                        @livewire('cart-icon-component')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{asset('assets/imgs/logo/logococo.jpg')}}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">

                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="{{route('home.index')}}">Home </a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('shop')}}">Shop</a></li>
                                    <li class="position-static"><a href="#">Our Products <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="http://127.0.0.1:8000/product-category/hookah">Hookah</a>
                                                <ul>
                                                    <li><a href="http://127.0.0.1:8000/product-category/hookah">Full shisha</a></li>
                                                    <li><a href="http://127.0.0.1:8000/product-category/shisha-bowl">shisha bowl</a></li>
                                                    <li><a href="http://127.0.0.1:8000/product-category/hose">shisha hose</a></li>
                                                    <li><a href="http://127.0.0.1:8000/product-category/shisha-glass">shisha glass</a></li>
                                                    <li><a href="http://127.0.0.1:8000/product-category/accessories-shisha">shisha accessories</a></li>
                                                    <li><a href="http://127.0.0.1:8000/product-category/shisha-coal">shisha coal</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="http://127.0.0.1:8000/product-category/Tobacco-maasal">Tobacco</a>
                                                <ul>
                                                    <li><a href="http://127.0.0.1:8000/product-category/tobacco-maasal">Shisha Maasal</a></li>
                                                    <li><a href="http://127.0.0.1:8000/product-category/Tobacco-Cigarettes">Cigarettes</a></li>
                                                    <li><a href="http://127.0.0.1:8000/product-category/vape">Vape</a></li>

                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="http://127.0.0.1:8000/product-category/alcohol">Alcohol</a>
                                                <ul>
                                                    <li><a href="http://127.0.0.1:8000/product-category/alcohol">ALcohol</a></li>

                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="#"><img src="{{asset('assets/imgs/logo/logococo.jpg')}}" alt="CocoHelena"></a>


                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                     @auth
                                    <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>

                                        @if(Auth::user()->utype=='ADM')

                                        <ul class="sub-menu">
                                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>

                                            <li><a href="{{route('admin.products')}}">Products</a></li>
                                            <li><a href="{{route('admin.categories')}}">Categories</a></li>
                                            <li><a href="#">Coupons</a></li>
                                            <li><a href="#">Orders</a></li>
                                            <li><a href="#">Customers</a></li>

                                        </ul>
                                        @else
                                        <ul class="sub-menu">
                                            <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>

                                        </ul>
                                        @endif

                                    </li>
                                      @endif
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <p class="mobile-promotion">Happy <span class="text-brand">Happy holidays</span>. Big Sale Up to 40%</p>

                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="{{asset('assets/imgs/logo/logococo.jpg')}}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>




                    </nav>

                </div> --}}
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="login.html">Log In </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="register.html">Sign Up</a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+961) 70 066 693 </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
 {{$slot}}
    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email" src="{{asset('assets/imgs/theme/icons/icon-email.svg')}}" alt="">
                                <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$5 coupon for first shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="form-subcriber d-flex wow fadeIn animated">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="index.html"><img src="{{asset('assets/imgs/logo/logococo.jpg')}}" alt="logo"></a>
                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>Jbeil,next to spinneys supermarket
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone: </strong>+961 70060093
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>georgtte.tarabay2@gmail.com
                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="https://www.facebook.com/ALSULTANHOOKAH.1?mibextid=ZbWKwL"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>

                                <a href="https://www.instagram.com/alsultan_hookah_official/"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="{{route('about')}}">About Us</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="{{route('shop.cart')}}">View Cart</a></li>
                            <li><a href="{{route('shop.wishlist')}}">My Wishlist</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">Install App</h5>
                        <div class="row">
                            <div class="col-md-8 col-lg-12">
                                <p class="wow fadeIn animated">From App Store or Google Play</p>
                                <div class="download-app wow fadeIn animated mob-app">
                                    <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="{{asset('assets/imgs/theme/app-store')}}.jpg" alt=""></a>
                                    <a href="#" class="hover-up"><img src="{{asset('assets/imgs/theme/google-play')}}.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                                <img class="wow fadeIn animated" src="{{asset('assets/imgs/theme/payment-method.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated mob-center">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Vendor JS-->
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.syotimer.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/plugins/magnific-popup.jsv')}}"></script>
<script src="{{asset('assets/js/plugins/select2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
<script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollup.jsv')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.vticker-min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.theia.sticky.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.elevatezoom.jsv')}}"></script>
<!-- Template  JS -->
<script src="{{asset('assets/js/main.js?v=3.3')}}"></script>
<script src="{{asset('assets/js/shop.js?v=3.3')}}"></script>
@livewireScripts
@stack('scripts')
</body>

</html>
