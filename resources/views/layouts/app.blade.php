<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="{{asset('image/favicon.png')}}" rel="icon" />
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-4.2.1/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- END BOOTSTRAP CSS -->

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="{{asset('owlcarousel/owl.carousel.css')}}">
    <!-- END OWL CAROUSEL -->

    <!-- FONT CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/icofont.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('owlcarousel/animated.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('video/video.popup.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- END STYLE CSS -->

    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    <!-- END RESPONSIVE CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CPoppins:200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
    <div class="zmovo-main dark-img">
        <!-- Preloader -->
        <div class="zmovo-preloader">
            <div class="boxes">
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        <header class="zmovo-header zmovo-header3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 zmovo-logos">
                        <div class="zmovo-logo">
                            <a href="#"><img src="image/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 zmovo-menus">
                        <div class="main-menu">
                            <div class="navigation">
                                <div class="menu-container">
                                    <div id="navigation">
                                        <ul>
                                            <li class="active has-sub"><span class="submenu-button"></span><a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                    <li><a href="index-3.html">Home 3</a></li>
                                                    <li><a href="index-4.html">Home 4</a></li>
                                                    <li><a href="index-5.html">Home 5</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="trailor.html">Trailor</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="index.html">Product</a>
                                                <ul>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Grid view</a>
                                                        <ul>
                                                            <li><a href="grid.html">4 column</a></li>
                                                            <li><a href="grid-left.html">Left Side</a></li>
                                                            <li><a href="grid-right.html">Right Side</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">List view</a>
                                                        <ul>
                                                            <li><a href="list.html">one column</a></li>
                                                            <li><a href="list-left.html">Left Side</a></li>
                                                            <li><a href="list-right.html">Right Side</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product-single.html">Single Product</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="index.html">Page</a>
                                                <ul>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Login</a>
                                                        <ul>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="ragister.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><span class="submenu-button"></span><a href="#">blog</a>
                                                <ul>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog Page</a>
                                                        <ul>
                                                            <li><a href="blog.html">Blog Left</a></li>
                                                            <li><a href="blog-2.html">Blog Right</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog Single</a>
                                                        <ul>
                                                            <li><a href="blog-details.html">Blog Single 1</a></li>
                                                            <li><a href="blog-details-2.html">Blog Single 2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 zmovo-t-right">
                        <div class="zmovo-header-right">
                            <div class="zmovo-top-search">
                                <div class="zmovo-ser-icon" id="clickserch"><span class="fa fa-search"></span></div>
                                <div class="zmovo-hidden-search" id="opensearch">
                                    <input type="search" placeholder="Enter the movie Name">
                                </div>
                            </div>
                            <div class="zmovo-login">
                                <a href="login.html" class="btn login-btn"><span class="fa fa-user"></span> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div>
            @yield('content')
        </div>
    </div>
    <footer class="zmovo-footer-area pt-50">
        <div class="zmovo-footer">
            <div class="container">
                <div class="zmovo-footer-top">
                    <div class="row">
                        <div class="col-sm-3 col-lg-3">
                            <div class="zmoto-instagram-post gradient1">
                                <img src="image/instagram/1.jpg" alt="">
                                <a href="#" class="zmoto-instagram-icon"><span class="fa fa-instagram"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="zmoto-instagram-post gradient1">
                                <img src="image/instagram/2.jpg" alt="">
                                <a href="#" class="zmoto-instagram-icon"><span class="fa fa-instagram"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="zmoto-instagram-post gradient1">
                                <img src="image/instagram/3.jpg" alt="">
                                <a href="#" class="zmoto-instagram-icon"><span class="fa fa-instagram"></span></a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="zmoto-instagram-post gradient1">
                                <img src="image/instagram/4.jpg" alt="">
                                <a href="#" class="zmoto-instagram-icon"><span class="fa fa-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="zmovo-footer-center pt-50">
                    <div class="zmovo-ft-widgets">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="zmovo-ft-widget">
                                    <div class="zmovo-ft-widget-titles">
                                        <h2 class="zmovo-ft-widget-title">Movies Category</h2>
                                    </div>
                                    <div class="zmoto-ft-widget-contetn">
                                        <ul>
                                            <li><a href="#">Movies</a></li>
                                            <li><a href="#">Videos</a></li>
                                            <li><a href="#">English Movies</a></li>
                                            <li><a href="#">China Movies</a></li>
                                            <li><a href="#">Tailor</a></li>
                                            <li><a href="#">Upcoming Movies</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="zmovo-ft-widget">
                                    <div class="zmovo-ft-widget-titles no-text">
                                        <h2 class="zmovo-ft-widget-title">information</h2>
                                    </div>
                                    <div class="zmoto-ft-widget-contetn">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Song</a></li>
                                            <li><a href="#">Forums</a></li>
                                            <li><a href="#">Place</a></li>
                                            <li><a href="#">Hot Collection</a></li>
                                            <li><a href="#">Upcoming Events</a></li>
                                            <li><a href="#">All Movies</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="zmovo-ft-widget">
                                    <div class="zmovo-ft-widget-titles no-text">
                                        <h2 class="zmovo-ft-widget-title">Locations</h2>
                                    </div>
                                    <div class="zmoto-ft-widget-contetn">
                                        <ul>
                                            <li><a href="#">South Korea</a></li>
                                            <li><a href="#">Germany</a></li>
                                            <li><a href="#">United States</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">India</a></li>
                                            <li><a href="#">New Movies</a></li>
                                            <li><a href="#">United Kingdom</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="zmovo-ft-widget">
                                    <div class="zmovo-ft-widget-titles">
                                        <h2 class="zmovo-ft-widget-title">Newsletter</h2>
                                    </div>
                                    <div class="zmoto-ft-widget-contetn">
                                        <div class="zmovo-ft-newsletter">
                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anytg embarrassing hidden.</p>
                                            <div class="zmovo-ft-newsletter-area pt-30">
                                                <div class="zmovo-ft-newsletter">
                                                    <input type="text" class="form-control" placeholder="Enter Address">
                                                    <button type="submit"><span class="fa fa-paper-plane"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="zmovo-ft-social-widget pt-50">
                                            <ul>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="zmovo-footer-buttom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-lg-6">
                        <div class="zmovo-ft-menu">
                            <ul>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Our Ads</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <div class="zmovo-ft-copyright">
                            <p>CopyRight 2019 Develop by <a href="#" class="c1">Themepul</a> . All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('vendor/modernizr-3.5.0.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('video/video.popup.js')}}"></script>
    <script src="{{asset('bootstrap-4.2.1/bootstrap.min.js')}}"></script>
    <script src="{{asset('owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('menu/menumaker.js')}}"></script>
    <script src="{{asset('slick/swiper.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>