{% extends "base.html" %}

{% block title %} 
    Cart
{% endblock %}

{% block body %}

<!-- https://p.w3layouts.com/demos/bike_shop/web/cart.html -->

<div id="cart">
    <div class="product-big-title-area mb-5">
        <div class="container">
            <div class="product-bit-title text-center">
                <h1>Cart</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-4">

                <!-- <div class="single-sidebar">
                    <h2 class="sidebar-title">Search Products</h2>
                    <form action="">
                        <input type="text" placeholder="Search products...">
                        <input type="submit" value="Search">
                    </form>
                </div> -->

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Top products</h2>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="single-product.html">Sony Xperia - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins>
                        </div>                             
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="single-product.html">Sony Xperia - 2015</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins>
                        </div>                             
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="single-product.html">Sony Xperia - 2016</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins>
                        </div>                             
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                        <h2><a href="single-product.html">Sony Xperia - 2017</a></h2>
                        <div class="product-sidebar-price">
                            <ins>$700.00</ins>
                        </div>                             
                    </div>
                </div>

                <!-- <div class="single-sidebar">
                    <h2 class="sidebar-title">Recent Posts</h2>
                    <ul>
                        <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                        <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                        <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                        <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                        <li><a href="single-product.html">Sony Smart TV - 2015</a></li>
                    </ul>
                </div> -->

            </div>
            <div class="col-md-4">

                <a class="btn btn-primary text-center float-right" href="/order">Continue to order page</a>
            </div>
        </div>
    </div>
</div>

{% endblock %}