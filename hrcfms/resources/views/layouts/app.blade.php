<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hrcfms</title>

    <!-- Google Font -->
    <link href="{{url('public/css?family=Lora:400,700&display=swap')}}" rel="stylesheet">
    <link href="{{url('public/css?family=Cabin:400,500,600,700&display=swap')}}" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('public/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="{{url('public/img/SLflag.jpg')}}" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="{{route('guest.pickroom')}}">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">HomeTest</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                
                <li><a href="{{route('register')}}">Register</a></li>
                
            
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> +94 (0) 74 227 7599</li>
            <li><i class="fa fa-envelope"></i> info.sitara@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
     <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> +94 (0) 77 203 0000</li>
                            <li><i class="fa fa-envelope"></i> info.sitara@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="{{route('guest.pickroom')}}" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <img src="{{url('public/img/SLflag.jpg')}}" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="{{url('public/img/sitaralogo1.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="{{ url('/') }} ">Home</a></li>
                                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('guest.pickreview')}}">Reviews</a></li>
                                    <li><a href="./pages.html">Rooms</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('deluxe')}}">Deluxe Room</a></li>
                                            <li><a href="{{route('suite')}}">Suite Room</a></li>
                                            <li><a href="">Superior Room</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                    <li><a href="{{route('login')}}">Login</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="{{url('public/img/logofooter2.jpg')}}" alt="">
                                </a>
                            </div>
                            <p>With a passion for excellence and a dedication to guest satisfaction, <br /> we connect travelers to the beauty of Weligama and beyond.</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>+94 (0) 74 227 7599</li>
                                <li>info.sitara@gmail.com</li>
                                <li>Modarawatta Pelena, Weligama 81700</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{url('public/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('public/js/bootstrap.min.js')}}"></script>
    <script src="{{url('public/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('public/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('public/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('public/js/jquery.slicknav.js')}}"></script>
    <script src="{{url('public/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('public/js/main.js')}}"></script>
</body>

</html>