{% extends "base.html" %}

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

        <h2>{{title}}</h2>
        <p>{{content}}</p>
        <p><a href="/login">{{link}}</a></p>

        <!-- <br> {{user_session.name}}
        <br> {{user_session.id}}
        <br> {{user_session.email}} -->
    </div>
</div>

{% endblock %}