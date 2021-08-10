{% extends "base.html" %}

{% block title %}
    Sign in
{% endblock %}

{% block body %}

<!-- https://p.w3layouts.com/demos/shopper/web/registration.html -->
<!-- https://p.w3layouts.com/demos/adidas/web/register.html -->

<div id="signin-page">
    <div class="product-big-title-area mb-5">
        <div class="container">
            <div class="product-bit-title text-center">
                <h1>Signin</h1>
            </div>
        </div>
    </div>

    <div class="container">

        <p>Welcome, please enter the  following to sign in.</p>
        <!-- <p>If you have previously Login with us, <span>click here</span></p> -->
        <form id="signinForm" method="POST" class="py-3 my-3">
            <input id="hidden" name="hidden" type="hidden" value="hidden" /> <!-- input test pour le form backend-->
            <div class="form-group my-4">
                <label for="username" class="h5">User name: *</label>
                <input type="text" class="form-control form-control-lg" value="" id="username" />
            </div>
            <div class="form-group my-4">
                <label for="email" class="h5">Email: *</label>
                <input type="email" class="form-control form-control-lg" value="" id="email" />
            </div>
            <div class="form-group my-4">
                <label for="password:" class="h5">Password: *</label>
                <input type="password" class="form-control form-control-lg" value="" id="password" />
            </div>
            <div class="form-group my-4">
                <label for="confirm_password:" class="h5">Confirm password: *</label>
                <input type="password" class="form-control form-control-lg" value="" id="confirm_password" />
            </div>
            <!-- <label for="send" class="h5">&nbsp;</label> -->
            <button type="submit" class="btn btn-primary text-center my-4" id="signinFormSend">Signin</button>
            <!-- <a href="#">Forgot Password ?</a> -->
        </form>
    </div>
</div>

{% endblock %}