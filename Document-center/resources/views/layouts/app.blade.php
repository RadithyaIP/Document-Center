<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Document Center</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/img/ship.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="{{ asset('assets') }}/img/logo-PAL.png" alt="" width="200px" height="150px"/></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Logout</h2>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="http://127.0.0.1:8000/">Home</a>
                                    
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="{{ route('Dokumen.index') }}">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="form-components.html">Form Components</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="http://127.0.0.1:8000/"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        </li>
                        <li><a data-toggle="tab" href="{{ route('Dokumen.index') }}"><i class="notika-icon notika-form"></i> Forms</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="inbox.html">Inbox</a>
                                </li>
                                <li><a href="view-email.html">View Email</a>
                                </li>
                                <li><a href="compose-email.html">Compose Email</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                           
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            
                        </div>
                        <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                            
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
   <!--content-->
  @yield('content')
   <!--End content-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{ asset('assets') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{ asset('assets') }}/js/counterup/waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('assets') }}/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('assets') }}/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ asset('assets') }}/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/flot/jquery.flot.js"></script>
    <script src="{{ asset('assets') }}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('assets') }}/js/flot/curvedLines.js"></script>
    <script src="{{ asset('assets') }}/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/knob/jquery.knob.js"></script>
    <script src="{{ asset('assets') }}/js/knob/jquery.appear.js"></script>
    <script src="{{ asset('assets') }}/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/wave/waves.min.js"></script>
    <script src="{{ asset('assets') }}/js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
   
