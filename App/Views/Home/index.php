{% extends "base.html" %}

{% block title %} 
    Home 
{% endblock %}

{% block body %}
<!-- https://p.w3layouts.com/demos/gretong/web/ -->
<!-- https://www.templatemo.com/templates/templatemo_385_floral_shop/index.html -->

    <div id="home-page">
    <!-- <div class="slider-area">
            <div class="block-slider block-slider4">
                <ul class="" id="bxslider-home4">
                    <li>
                        <img src="img/h4-slide.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                iPhone <span class="primary">6 <strong>Plus</strong></span>
                            </h2>
                            <h4 class="caption subtitle">Dual SIM</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                    <li>
                        <img src="img/h4-slide2.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                by one, get one <span class="primary">50% <strong>off</strong></span>
                            </h2>
                            <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                    <li>
                        <img src="img/h4-slide3.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Apple <span class="primary">Store <strong>Ipod</strong></span>
                            </h2>
                            <h4 class="caption subtitle">Select Item</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                    <li>
                        <img src="img/h4-slide4.png" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                Apple <span class="primary">Store <strong>Ipod</strong></span>
                            </h2>
                            <h4 class="caption subtitle">& Phone</h4>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                        </div>
                    </li>
                </ul>
            </div>
    </div>  -->
    <!-- End slider area -->

    <!-- <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> End promo area -->

    <div class="container maincontent-area">

        <div class="latest-product">
            <h2 class="section-title mt-3 mb-1">Latest products</h2>
            <div class="product-carousel mb-3 py-1">
                <div class="row">

{% for p in latest %}

                    <div class="col-md-6 col-lg-4">
                        <div class="card cardAncient my-4 border-0 shadow">
                            <a class="overlay d-block" href="">
                                <img class="align-self-center" src="{{p.picture}}" alt="" title="">
                            </a>
                            <div class="card-body text-center d-flex flex-column justify-content-around ">
                                <h4 class="card-title">{{p.name}}</h4>
                                <p class="card-text">
                                    <small class="text-muted">by {{p.brand}}</small>
                                </p>
                                <p class="card-text text-left card-desc">
                                    {{p.description}}
                                </p>
                                <p class="card-text product-wid-price">
                                    <span class="text-left float-left align-left h5"> {{p.price}} € </span>
                                    <small class="text-right float-right align-right text-muted"><a class="card-link" href="">See more</a></small >
                                </p>
                            </div>
                        </div>
                    </div>

{% endfor %}

                </div>
            </div>
        </div>

        <div class="top-sellers">
            <h2 class="section-title mt-3 mb-1">Top sellers</h2>
            <div class="product-carousel mb-3 py-1">
                <div class="row">

{% for p in topsellers %}

                    <div class="col-md-6 col-lg-4">
                        <div class="card cardAncient my-4 border-0 shadow">
                            <a class="overlay d-block" href="">
                                <img class="align-self-center" src="{{p.picture}}" alt="" title="">
                            </a>
                            <div class="card-body text-center d-flex flex-column justify-content-around ">
                                <h4 class="card-title">{{p.name}}</h4>
                                <p class="card-text">
                                    <small class="text-muted">by {{p.brand}}</small>
                                </p>
                                <p class="card-text text-left card-desc">
                                    {{p.description}}
                                </p>
                                <p class="card-text product-wid-price">
                                    <span class="text-left float-left align-left h5"> {{p.price}} € </span>
                                    <small class="text-right float-right align-right text-muted"><a class="card-link" href="">See more</a></small >
                                </p>
                            </div>
                        </div>
                    </div>

{% endfor %}

                </div>
            </div>
        </div>
<!-- End of main content area -->

    <!-- <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> End brands area -->

    <div class="container product-widget-area">
        <div class="row">

            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top Sellers</h2>
                    <a href="" class="wid-view-more">View All</a>

{% for p in topsellers %}

                    <div class="single-wid-product">
                        <a href="single_product">
                            <img src="{{p.picture}}" alt="" class="product-thumb">
                        </a>
                        <h2><a href="single_product">{{p.name}}</a></h2>
                        <div class="product-wid-rating">
                            <!-- <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> -->
                        </div>
                        <div class="product-wid-price">
                            <ins>{{p.price}}</ins>
                        </div>
                    </div>

{% endfor %}

                </div>
            </div>

            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Latest</h2>
                    <a href="#" class="wid-view-more">View All</a>

{% for p in latest %}

                    <div class="single-wid-product">
                        <a href="single_product">
                            <img src="{{p.picture}}" alt="" class="product-thumb">
                        </a>
                        <h2><a href="single_product">{{p.name}}</a></h2>
                        <div class="product-wid-rating">
                            <!-- <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> -->
                        </div>
                        <div class="product-wid-price">
                            <ins>{{p.price}} €</ins>
                        </div>
                    </div>

{% endfor %}

                </div>
            </div>

            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Scarfs</h2>
                    <a href="#" class="wid-view-more">View All</a>

{% for p in scarfs %}

                        <div class="single-wid-product">
                            <a href="single_product">
                                <img src="{{p.picture}}" alt="" class="product-thumb">
                            </a>
                            <h2><a href="single_product">{{p.name}}</a></h2>
                            <div class="product-wid-rating">
                                <!-- <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> -->
                            </div>
                            <div class="product-wid-price">
                                <ins>{{p.price}}</ins>
                            </div>
                        </div>

{% endfor %}

                </div>
            </div>

        </div>
    </div>
</div> 
<!-- End product widget area -->

{% endblock %}