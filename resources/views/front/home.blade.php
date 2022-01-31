<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Plaza - eCommerce Template</title>
    <meta charset="UTF-8">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('plaza/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('plaza/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('plaza/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('plaza/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('plaza/css/animate.css')}}" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="container-fluid">
            <!-- logo -->
            <div class="site-logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-right">
                <a href="cart.html" class="card-bag"><img src="img/icons/bag.png" alt=""><span>2</span></a>
            </div>
            <!-- site menu -->
            <ul class="main-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="categorie.html">Woman</a></li>
                <li><a href="categorie.html">Man</a></li>
                <li><a href="categorie.html">Child</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section set-bg" data-setbg="img/bg.jpg">
        <div class="hero-slider owl-carousel">
            <div class="hs-item">
                <div class="hs-left"><img src="img/slider-img.png" alt=""></div>
                <div class="hs-right">
                    <div class="hs-content">
                        <div class="price">from $77.90</div>
                        <h2><span>2018</span> <br>winter collection</h2>
                        <a href="" class="site-btn">Go, GRAB!</a>
                    </div>
                </div>
            </div>
            <div class="hs-item">
                <div class="hs-left"><img src="img/slider-img.png" alt=""></div>
                <div class="hs-right">
                    <div class="hs-content">
                        <div class="price">from $1.00</div>
                        <h2><span>2011</span> <br>dhaka collection</h2>
                        <a href="" class="site-btn">Now</a>
                    </div>
                </div>
            </div>
            <div class="hs-item">
                <div class="hs-left"><img src="img/slider-img.png" alt=""></div>
                <div class="hs-right">
                    <div class="hs-content">
                        <div class="price">from $19.90</div>
                        <h2><span>2018</span> <br>summer collection</h2>
                        <a href="" class="site-btn">Shop NOW!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Intro section -->
    <section class="intro-section spad pb-0">
        <div class="section-title">
            <h2>premium products</h2>
            <p>We recommend</p>
        </div>
        <div class="intro-slider">
            <ul class="slidee">
                @foreach ($products as $product)
                <li>
                    <div class="intro-item">
                        <figure>
                            <a href="product.html">
                                <img src="{{asset('img/' . $product->image)}}" alt="#">
                            </a>
                        </figure>
                        <div class="product-info">
                            <h5>{{$product->name}}</h5>
                            <p>${{$product->price}}</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="container">
            <div class="scrollbar">
                <div class="handle">
                    <div class="mousearea"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro section end -->


    <!-- Featured section -->
    <div class="featured-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="featured-item">
                        <img src="img/featured/featured-1.jpg" alt="">
                        <a href="#" class="site-btn">see more</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-item mb-0">
                        <img src="img/featured/featured-2.jpg" alt="">
                        <a href="#" class="site-btn">see more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured section end -->


    <!-- Product section -->
    <section class="product-section spad">
        <div class="container">
            <ul class="product-filter controls">
                <li class="control" data-filter=".new">New arrivals</li>
                <li class="control" data-filter="all">Recommended</li>
                <li class="control" data-filter=".best">Best sellers</li>
            </ul>
            <div class="row" id="product-filter">
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="img/products/1.jpg" alt="">
                            <div class="pi-meta">
                                <a href="product.html">
                                    <div class="pi-m-left">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>view</p>
                                    </div>
                                </a>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Long red Shirt</h6>
                            <p>$39.90</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 new">
                    <div class="product-item">
                        <figure>
                            <img src="img/products/2.jpg" alt="">
                            <div class="bache">NEW</div>
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="img/icons/eye.png" alt="">
                                    <p>view</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Hype grey shirt</h6>
                            <p>$19.50</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="img/products/3.jpg" alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="img/icons/eye.png" alt="">
                                    <p>view</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>long sleeve jacket</h6>
                            <p>$59.90</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 new best">
                    <div class="product-item">
                        <figure>
                            <img src="img/products/4.jpg" alt="">
                            <div class="bache sale">SALE</div>
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="img/icons/eye.png" alt="">
                                    <p>view</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Denim men shirt</h6>
                            <p>$32.20</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="img/products/5.jpg" alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="img/icons/eye.png" alt="">
                                    <p>view</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Long red Shirt</h6>
                            <p>$39.90</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 new">
                    <div class="product-item">
                        <figure>
                            <img src="img/products/6.jpg" alt="">
                            <div class="bache">NEW</div>
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="img/icons/eye.png" alt="">
                                    <p>view</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Hype grey shirt</h6>
                            <p>$19.50</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="img/products/7.jpg" alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="img/icons/eye.png" alt="">
                                    <p>view</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>long sleeve jacket</h6>
                            <p>$59.90</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="img/products/8.jpg" alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="img/icons/eye.png" alt="">
                                    <p>view</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Denim men shirt</h6>
                            <p>$32.20</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product section end -->

    <!-- Footer top section -->
    <section class="footer-top-section home-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-8 col-sm-12">
                    <div class="footer-widget about-widget">
                        <img src="img/logo.png" class="footer-logo" alt="">
                        <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                        <div class="cards">
                            <img src="img/cards/5.png" alt="">
                            <img src="img/cards/4.png" alt="">
                            <img src="img/cards/3.png" alt="">
                            <img src="img/cards/2.png" alt="">
                            <img src="img/cards/1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h6 class="fw-title">usefull Links</h6>
                        <ul>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Bloggers</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h6 class="fw-title">Sitemap</h6>
                        <ul>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Bloggers</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Press</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h6 class="fw-title">Shipping & returns</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Track Orders</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h6 class="fw-title">Contact</h6>
                        <div class="text-box">
                            <p>Your Company Ltd </p>
                            <p>1481 Creekside Lane Avila Beach, CA 93424, </p>
                            <p>+53 345 7953 32453</p>
                            <p>office@youremail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer top section end -->

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <p class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
    <!-- Footer section end -->


    <!--====== Javascripts & Jquery ======-->
    <script src="{{asset('plaza/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('plaza/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plaza/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('plaza/js/mixitup.min.js')}}"></script>
    <script src="{{asset('plaza/js/sly.min.js')}}"></script>
    <script src="{{asset('plaza/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('plaza/js/main.js')}}"></script>
</body>

</html>