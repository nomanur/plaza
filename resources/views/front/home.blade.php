@extends('front.layout.main')

@section('content')
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
                        <a href="{{route('singleproduct',$product->id)}}">
                            <img src="{{asset('img/' . $product->image)}}" alt="#">
                        </a>
                    </figure>
                    <div class="product-info">
                        <h5>{{$product->name}}</h5>
                        <p>${{number_format($product->price, 2)}}</p>
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

@endsection