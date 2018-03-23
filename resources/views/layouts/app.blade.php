<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shipit') }}</title>

    <!-- font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins-css.css')}}" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/typography.css')}}" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/shortcodes/shortcodes.css')}}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />

    <!-- Skin -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/skins/skin-blue.css')}}" />
</head>
<body>
<div class="wrapper">
    @if(!request()->is('login') && !request()->is('register') && !request()->is('password/reset'))
        <header id="header" class="header light">

            <!--=================================
             mega menu -->

            <div class="menu">
                <!-- menu start -->
                <nav id="menu" class="mega-menu">
                    <!-- menu list items container -->
                    <section class="menu-list-items">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <!-- menu logo -->
                                    <ul class="menu-logo">
                                        <li>
                                            <a href="{{url('/')}}" style="font-size: 30px;"><img id="logo_img" src="{{asset('images/logo.png')}}" alt="logo"></a>
                                        </li>
                                    </ul>
                                    <!-- menu links -->
                                    <div class="menu-bar">
                                        <ul class="menu-links">
                                            <li><a><i class="fa fa-plane"></i> Make Money Traveling</a></li>
                                            @guest
                                            <li><a href="{{url('login')}}" class="button" style="color: #fff; border-radius: 0px; width:100%; padding: 10px">Login</a></li>
                                            @else
                                                <li>
                                                    <a href="javascript:void(0)"><i class="fa fa-user"></i> {{Auth::user()->name}} <i class="fa fa-angle-down fa-indicator"></i></a>
                                                    <ul class="drop-down grid-col-2">
                                                        <li><a>Profile</a></li>
                                                        <li><a>Deliveries</a></li>
                                                        <li><a>Orders</a></li>
                                                        <li><a>Settings</a></li>
                                                        <li><a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </ul>
                                                </li>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </nav>
                <!-- menu end -->
            </div>
        </header>
    @endif
    @yield('content')
    @if(!request()->is('login') && !request()->is('register') && !request()->is('password/reset'))
        <footer class="footer page-section-pt black-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 xs-mb-30">
                        <div class="footer-useful-link footer-hedding">
                            <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 xs-mb-30">
                        <div class="footer-useful-link footer-hedding">
                            <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
                            <ul>
                                <li><a href="#">Create Account</a></li>
                                <li><a href="#">Company Philosophy</a></li>
                                <li><a href="#">Corporate Culture</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Client Management</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 xs-mb-30">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
                        <ul class="addresss-info">
                            <li><i class="fa fa-map-marker"></i> <p>Address: 17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p> </li>
                            <li><i class="fa fa-phone"></i> <a href="tel:7042791249"> <span>+(704) 279-1249 </span> </a> </li>
                            <li><i class="fa fa-envelope-o"></i>Email: letstalk@webster.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <h6 class="text-white mb-30 mt-10 text-uppercase">Subscribe to Our Newsletter</h6>
                        <p>Sign Up to our Newsletter to get the latest news and offers.</p>
                        <div class="footer-Newsletter">
                            <div id="mc_embed_signup_scroll">
                                <form action="php/mailchimp-action.php" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                                    <div id="msg"> </div>
                                    <div id="mc_embed_signup_scroll_2">
                                        <input id="mce-EMAIL" class="form-control" type="text" placeholder="Email address" name="email1" value="">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                        <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                                    </div>
                                    <div class="clear">
                                        <button type="submit" name="submitbtn" id="mc-embedded-subscribe" class="button border mt-20 form-button">  Get notified </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-widget mt-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 xs-mb-20">
                            <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Webster </a> All Rights Reserved </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 text-right xs-text-left">
                            <div class="footer-widget-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    @endif
</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- jquery -->
<script type="text/javascript" src="{{asset('js/jquery-1.12.4.min.js')}}"></script>

<!-- plugins-jquery -->
<script type="text/javascript" src="{{asset('js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script type="text/javascript">var plugin_path = '{{url('js')}}/';</script>

<!-- custom -->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
</body>
</html>
