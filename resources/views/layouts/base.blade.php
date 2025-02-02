
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BOIGHOR</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.css">


    @livewireStyles
</head>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">

                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: 01748031295" href="#"><span class="icon label-before fa fa-mobile"></span> Hotline: (+88) 01748031295</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="menu-item">
                                    <a title="Name:Ashik" href="#"><span class="icon label-before fa fa-user"></span> Name: Md.Ashik@PUST@ICE</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="menu-item">
                                    <a title="Gmail:Ashik" href="#"><span class="icon label-before fa fa-envelope"></span> Gmail: ashik.200607@s.pust.ac.bd</a>
                                </li>
                            </ul>
                        </div>



                        <div class="topbar-menu right-menu">
                            <ul>



                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->utype === 'ADM')
                                            <li class="menu-item menu-item-has-children parent">
                                                <a title="My Account" href="#">{{ Auth::user()->name }}<i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency">
                                                    <li class="menu-item">
                                                        <a title="Dashboard"
                                                            href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Categories"
                                                            href="{{ route('admin.categories') }}">Categories</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Products" href="{{ route('admin.products') }}">All
                                                            Products</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Attributes"
                                                            href="{{ route('admin.attributes') }}">Attributes</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Home Sliders"
                                                            href="{{ route('admin.homeslider') }}">Manage Home Slider</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Home Categories"
                                                            href="{{ route('admin.homecategories') }}">Manage Home
                                                            Categories</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Sales" href="{{ route('admin.sale') }}">Product Sales
                                                            Setting</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Sales" href="{{ route('admin.coupons') }}">Coupons
                                                            Setting</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Sales" href="{{ route('admin.token') }}">Recharge
                                                            Setting</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Orders" href="{{ route('admin.orders') }}">All
                                                            Orders</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Contact Messages"
                                                            href="{{ route('admin.contact') }}">Contact Messages</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Settings"
                                                            href="{{ route('admin.settings') }}">Settings</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Logout" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>
                                                    <form id="logout-form" method="POST"
                                                        action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                        @else
                                            <li class="menu-item menu-item-has-children parent">
                                                <a title="My Account" href="#">{{ Auth::user()->name }}<i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency">
                                                    <li class="menu-item">
                                                        <a title="Dashboard"
                                                            href="{{ route('user.dashboard') }}">Dashboard</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Orders" href="{{ route('user.orders') }}">Orders</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Change Password"
                                                            href="{{ route('user.changepassword') }}">Change Password</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="My Profile" href="{{ route('user.profile') }}">My
                                                            Profile</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a title="Logout" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>
                                                    <form id="logout-form" method="POST"
                                                        action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </li>
                                        @endif
                                    @else
                                        <li class="menu-item"><a title="Register or Login"
                                                href="{{ route('login') }}">Login</a></li>
                                        <li class="menu-item"><a title="Register or Login"
                                                href="{{ route('register') }}">Register</a></li>
                                    @endif

                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="mid-section main-info-area">

                            <div class="wrap-logo-top left-section">
                                <a href="/" class="link-to-home"><img
                                        src="{{ asset('assets/images/Boighor.jpg') }}" alt="logo"></a>
                            </div>

                            @livewire('header-search-component')

                            <div class="wrap-icon right-section">
                                @livewire('wishlist-count-component')

                                @livewire('cart-count-component')

                                <div class="wrap-icon-section show-up-after-1024">
                                    <a href="#" class="mobile-navigation">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="nav-section header-sticky">
                        {{-- <div class="header-nav-section">
                            <div class="container">
                                <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu"
                                    data-menuname="Sale Info">
                                    <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span
                                            class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span
                                            class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Top new items</a><span
                                            class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span
                                            class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Top rated items</a><span
                                            class="nav-label hot-label">hot</span></li>
                                </ul>
                            </div>
                        </div> --}}

                        <div class="primary-nav-section">
                            <div class="container">
                                <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                    <li class="menu-item home-icon">
                                        <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                                aria-hidden="true">Home</i></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/about" class="link-term mercado-item-title">About Us</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/shop" class="link-term mercado-item-title">Shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/cart" class="link-term mercado-item-title">Cart</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{ $slot }}

        @livewire('footer-component')

        <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/js/functions.js') }}"></script>
        <script src="{{ asset('assets/js/functions.js') }}"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/dqng24wo9am5srv92e6r30aju6azbvo4uw7bugq80lnofv96/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>

        @livewireScripts

        @stack('scripts')
    </body>

    </html>
