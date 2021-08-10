{% extends "base.html" %}

{% block title %} 
    Single Product
{% endblock %}

{% block body %}

<div class="single-product-page">
    <div class="container product">
        <!-- <div class="product"> -->
        <br>
        <a href="/catalog" class=""> < Go back to catalog</a>
        <h1 class="section-title my-4">{{ product.name }}</h1>
        <!-- <span>by {{ product.brand }}</span> -->

        <div class="row">
            <div class="col-md-8">
                <div class="product-carousel my-3 py-1">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="w-100" src="/img/{{product.picture}}" alt="" title="">
                        </div>

                        <div class="col-md-8">
                            <h2>Infos</h2>
                            <p class="">
                                Manufacturer : {{ product.brand }}
                            </p>
                            <p class="">
                                Description : {{ product.description }}
                            </p>
                            <p class="product-wid-price h4">
                                <ins>{{ product.price }} €</ins> 
                            </p>
                        </div>
                    </div>    
                </div>
            </div>

            <div class="col-md-4">
                <h2>Add to cart</h2>

            </div>
        </div>
    </div>
</div>
{% endblock %}