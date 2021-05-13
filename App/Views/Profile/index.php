{% extends "base.php" %}

{% block title %} 
    Profile
{% endblock %}

{% block body %}

<div id="profile-page">
    <div class="product-big-title-area mb-5">
        <div class="container">
            <div class="product-bit-title text-center">
                <h1>Profile</h1>
            </div>
        </div>
    </div>

    <div class="container">
        {{title}}
        {{content}}
    </div>
</div>

{% endblock %}