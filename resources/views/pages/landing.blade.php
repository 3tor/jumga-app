@extends('layouts.general')

@section('content')
 <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-top-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!-- ================= main slide ================= -->
                    <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                        <div class="item-slide">
                            <img src="{{ asset('frontend/images/banners/slide1.jpg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend/images/banners/slide2.jpg') }}">
                        </div>
                        <div class="item-slide rounded">
                            <img src="{{ asset('frontend/images/banners/slide3.jpg') }}">
                        </div>
                    </div>
                    <!-- ============== main slidesow .end // ============= -->
                </div>
                <!-- col.// -->
                <div class="col-md-3">
                    <div class="card mt-2 mb-2">
                        <figure class="itemside">
                            <div class="aside">
                                <div class="img-wrap img-sm border-right"><img src="images/items/3.jpg"></div>
                            </div>
                            <figcaption class="p-3">
                                <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                <div class="price-wrap">
                                    <span class="price-new b">$1280</span>
                                    <del class="price-old text-muted">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </figcaption>
                        </figure>
                    </div>
                    <!-- card.// -->
                    <div class="card mb-2">
                        <figure class="itemside">
                            <div class="aside">
                                <div class="img-wrap img-sm border-right"><img src="images/items/3.jpg"></div>
                            </div>
                            <figcaption class="p-3">
                                <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                <div class="price-wrap">
                                    <span class="price-new b">$1280</span>
                                    <del class="price-old text-muted">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </figcaption>
                        </figure>
                    </div>
                    <!-- card.// -->
                    <div class="card mb-2">
                        <figure class="itemside">
                            <div class="aside">
                                <div class="img-wrap img-sm border-right"><img src="images/items/3.jpg"></div>
                            </div>
                            <figcaption class="p-3">
                                <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                <div class="price-wrap">
                                    <span class="price-new b">$1280</span>
                                    <del class="price-old text-muted">$1980</del>
                                </div>
                                <!-- price-wrap.// -->
                            </figcaption>
                        </figure>
                    </div>
                    <!-- card.// -->
                </div>
                <!-- col.// -->
            </div>
        </div>
        <!-- container .//  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->

    <section class="section-main bg padding-top-sm py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div>
                       <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
                   </div>
                   <figcaption class="pt-3">
                    <h5>Fast Delivery</h5>
                    <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                    <a href="" class="btn btn-md btn-primary">Learn more</a>
                   </figcaption>
                </div>
                <div class="col-md-4">
                   <div>
                       <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
                   </div>
                   <figcaption class="pt-3">
                    <h5>Fast Delivery</h5>
                    <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                    <a href="" class="btn btn-md btn-primary">Learn more</a>
                   </figcaption>
                </div>
                <div class="col-md-4">
                       <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
                   <figcaption class="pt-3">
                    <h5>Fast Delivery</h5>
                    <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                    <a href="" class="btn btn-md btn-primary">Learn more</a>
                   </figcaption>
                </div>
            </div>
        </div>
    </section>

    <section class="section-main bg padding-top-sm py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <article class="card card-body">
                        <figure class="text-center">
                            <span class="rounded-circle icon-md bg-primary"><i class="fa fa-user white"></i></span>
                            <figcaption class="pt-4">
                            <h5 class="title">Creative Strategy &amp; solution</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                            <a href="{{route('merchant.register')}}" class="btn btn-md btn-primary">Learn more</a>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </article> <!-- panel-lg.// -->
                </div><!-- col // -->
                <div class="col-md-3">
                    <article class="card card-body">
                        <figure class="text-center">
                            <span class="rounded-circle icon-md bg-danger"><i class="fa fa-truck white"></i></span>
                            <figcaption class="pt-4">
                            <h5 class="title">Creative Strategy &amp; solution</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                            <a href="" class="btn btn-md btn-primary">Learn more</a>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </article> <!-- panel-lg.// -->
                </div> <!-- col // -->
                <div class="col-md-3">
                    <article class="card card-body">
                        <figure class="text-center">
                            <span class="rounded-circle icon-md bg-success"><i class="fa fa-star white"></i></span>
                            <figcaption class="pt-4">
                            <h5 class="title">Creative Strategy &amp; solution</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                            <a href="" class="btn btn-md btn-primary">Learn more</a>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </article> <!-- panel-lg.// -->
                </div> <!-- col // -->
                <div class="col-md-3">
                    <article class="card card-body">
                        <figure class="text-center">
                            <span class="rounded-circle icon-md bg-secondary"><i class="far fa-clock white"></i></span>
                            <figcaption class="pt-4">
                            <h5 class="title">Creative Strategy &amp; solution</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>
                            <a href="" class="btn btn-md btn-primary">Learn more</a>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </article> <!-- panel-lg.// -->
                </div> <!-- col // -->
            </div>
        </div>
    </section>



    <!-- ========================= Blog ========================= -->
    <section class="section-content padding-y-sm bg">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg">Featured Categories</h4>
            </header>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-banner" style="height:250px; background-image: url('images/posts/1.jpg');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">Primary text as title</h5>
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>
                <div class="col-md-4">
                    <div class="card-banner" style="height:250px; background-image: url('images/posts/2.jpg');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">Primary text as title</h5>
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>
                <div class="col-md-4">
                    <div class="card-banner" style="height:250px; background-image: url('images/posts/3.jpg');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">Primary text as title</h5>
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>

            </div>
        </div>
    </section>
    <!-- ========================= Blog .END// ========================= -->

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y-sm bg">
        <div class="container">

            <header class="section-heading heading-line">
                <h4 class="title-section bg">FEATURED PRODUCTS</h4>
            </header>
            <div class="row">
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/1.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Another name of item</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/2.jpg"> </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Good product</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/3.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
            </div>
            <!-- row.// -->

        </div>
        <!-- container .//  -->
    </section>

    <!-- ========================= SECTION ITEMS ========================= -->
    <section class="section-request bg padding-y-sm">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg text-uppercase">Recently Added</h4>
            </header>
            <div class="row">
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/1.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Another name of item</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/2.jpg"> </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Good product</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/3.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/3.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
            </div>
            <!-- row.// -->
            <div class="row">
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/1.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Another name of item</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/2.jpg"> </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Good product</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/3.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="images/items/3.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Add To Cart</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
            </div>
            <!-- row.// -->

        </div>
        <!-- container // -->
    </section>
@endsection