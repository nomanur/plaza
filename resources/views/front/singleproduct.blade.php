@extends('front.layout.main')

@section('content')
<!-- Header section -->
<header class="header-section header-normal">
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
            <a href="{{route('cart')}}" class="card-bag"><img src="img/icons/bag.png" alt=""><span>{{auth()->user()->cart->count()}}</span></a>
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


<!-- Page Info -->
<div class="page-info-section page-info">
    <div class="container">
        <div class="site-breadcrumb">
            <a href="">Home</a> /
            <a href="">Sales</a> /
            <a href="">Bags</a> /
            <span>Shoulder bag</span>
        </div>
        <img src="img/page-info-art.png" alt="" class="page-info-art">
    </div>
</div>
<!-- Page Info end -->


<!-- Page -->
<div class="page-area product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <figure>
                    <img class="product-big-img" src="{{asset('img/'.$product->image)}}" alt="">
                </figure>
                <div class="product-thumbs">
                    <div class="product-thumbs-track">
                        <div class="pt" data-imgbigurl="{{asset('img/'.$product->productimage1)}}"><img src="{{asset('img/'.$product->productimage1)}}" alt=""></div>
                        <div class="pt" data-imgbigurl="{{asset('img/'.$product->productimage2)}}"><img src="{{asset('img/'.$product->productimage2)}}" alt=""></div>
                        <div class="pt" data-imgbigurl="{{asset('img/'.$product->productimage3)}}"><img src="{{asset('img/'.$product->productimage3)}}" alt=""></div>
                        <div class="pt" data-imgbigurl="{{asset('img/'.$product->productimage4)}}"><img src="{{asset('img/'.$product->productimage4)}}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-content">
                    <h2>{{$product->name}}</h2>
                    <div class="pc-meta">
                        <h4 class="price">${{number_format($product->price, 2)}}</h4>
                        <strike>$300</strike>
                        <div class="review">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star is-fade"></i>
                            </div>
                            <span>(2 reviews)</span>
                        </div>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore- mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                    <a href="{{route('addtocart', $product->id)}}" class="site-btn btn-line">ADD TO CART</a>
                </div>
            </div>
        </div>
        <div class="product-details">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <ul class="nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Reviews (0)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- single tab content -->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                        </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center rp-title">
            <h5>Related products</h5>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="product-item">
                    <figure>
                        <img src="img/products/1.jpg" alt="">
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
            <div class="col-lg-3">
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
            <div class="col-lg-3">
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
            <div class="col-lg-3">
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
        </div>
    </div>
</div>
<!-- Page end -->

@endsection