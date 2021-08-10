{% extends "base.html" %}

{% block title %} 
    Catalog
{% endblock %}

{% block body %}
<!-- https://p.w3layouts.com/demos/shopper/web/woman.html# -->
<!-- https://p.w3layouts.com/demos/bike_shop/web/bicycles.html -->
<!-- https://p.w3layouts.com/demos/spike_shoes/web/products.html -->
<!-- https://p.w3layouts.com/demos/adidas/web/# -->
<!-- https://p.w3layouts.com/demos/adidas/web/shop.html
 -->

<div id="catalog-page">
    <div class="product-big-title-area mb-5">
        <div class="container">
            <div class="product-bit-title text-center">
                <h1>Catalog</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product">
            <h2 class="section-title mt-3 mb-1">Top sellers</h2>
            <div class="product-carousel mb-3 py-1">
                <div class="row">

{% for p in topsellers %}

                    <div class="col-md-6 col-lg-4">
                        <div class="card cardAncient my-4 border-0 shadow">
                            <a class="overlay d-block" href="{{p.link}}">
                                <img class="align-self-center" src="/img/{{p.picture}}" alt="" title="">
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
                                    <span class="text-left float-left align-left h5">
                                        <ins>{{p.price}} €</ins> 
                                        <!-- <del>$425.00</del> -->
                                    </span>
                                    <small class="text-right float-right align-right text-muted"><a class="card-link" href="{{p.link}}">See more</a></small >
                                </p>
                            </div>
                        </div>
                    </div>

{% endfor %}

                </div>
            </div>
        </div>

        <div class="product">
            <h2 class="section-title mt-3 mb-1">Our hats</h2>
            <div class="product-carousel mb-3 py-1">
                <div class="row">

{% for p in hats %}

                    <div class="col-md-6 col-lg-4">
                        <div class="card cardAncient my-4 border-0 shadow">
                            <a class="overlay d-block" href="{{p.link}}">
                                <img class="align-self-center" src="/img/{{p.picture}}" alt="" title="">
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
                                    <span class="text-left float-left align-left h5">
                                        <ins>{{p.price}} €</ins> 
                                        <!-- <del>$425.00</del> -->
                                    </span>
                                    <small class="text-right float-right align-right text-muted"><a class="card-link" href="{{p.link}}">See more</a></small >
                                </p>
                            </div>
                        </div>
                    </div>

{% endfor %}

                </div>
            </div>
        </div>

        <div class="product">
            <h2 class="section-title mt-3 mb-1">Our scarfs</h2>
            <div class="product-carousel mb-3 py-1">
                <div class="row">

{% for p in scarfs %}

                    <div class="col-md-6 col-lg-4">
                        <div class="card cardAncient my-4 border-0 shadow">
                            <a class="overlay d-block" href="{{p.link}}">
                                <img class="align-self-center" src="/img/{{p.picture}}" alt="" title="">
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
                                    <span class="text-left float-left align-left h5">
                                        <ins>{{p.price}} €</ins> 
                                        <!-- <del>$425.00</del> -->
                                    </span>
                                    <small class="text-right float-right align-right text-muted"><a class="card-link" href="{{p.link}}">See more</a></small >
                                </p>
                            </div>
                        </div>
                    </div>

{% endfor %}

                </div>
            </div>
        </div>

        <div class="product">
            <h2 class="section-title mt-3 mb-1">Our socks</h2>
            <div class="product-carousel mb-3 py-1">
                <div class="row">

{% for p in socks %}

                    <div class="col-md-6 col-lg-4">
                        <div class="card cardAncient my-4 border-0 shadow">
                            <a class="overlay d-block" href="{{p.link}}">
                                <img class="align-self-center" src="/img/{{p.picture}}" alt="" title="">
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
                                    <span class="text-left float-left align-left h5">
                                        <ins>{{p.price}} €</ins> 
                                        <!-- <del>$425.00</del> -->
                                    </span>
                                    <small class="text-right float-right align-right text-muted"><a class="card-link" href="{{p.link}}">See more</a></small >
                                </p>
                            </div>
                        </div>
                    </div>

{% endfor %}

                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}