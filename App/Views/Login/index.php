{% extends "base.html" %}

{% block title %} 
    Login
{% endblock %}

{% block body %}

<!-- https://p.w3layouts.com/demos/shopper/web/login.html -->

<div id="login-page">
    <div class="product-big-title-area mb-5">
        <div class="container">
            <div class="product-bit-title text-center">
                <h1>Login</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <section class="col-md-6 login">
                <p>Welcome, please enter the  following to log in.</p>
                <!-- <p>If you have previously Login with us, <span>click here</span></p> -->
                <form id="loginForm" method="POST" class="py-3 my-3" action="{{sendForm}}">
                <!-- return -->
                    <input id="hidden" name="hidden" type="hidden" value="hidden" /> <!-- input test pour le form backend-->
                    <div class="form-group my-4">
                        <label for="username" class="h5">User name:</label>
                        <input type="text" class="form-control form-control-lg" value="" id="username" name="username" />
                    </div>
                    <div class="form-group my-4">
                        <label for="password:" class="h5">Password:</label>
                        <input type="password" class="form-control form-control-lg" value="" id="password"  name="password" />
                    </div>
                    <!-- <label for="send" class="h5">&nbsp;</label> -->
                    <button type="submit" class="btn btn-primary text-center my-4" id="loginFormSend" name="loginFormSend">Login</button>
                    <!-- <a href="#">Forgot Password ?</a> -->
                </form>
                <!-- <p class="invalidFeedback">
                    {{passwordError}}
                </p>
                <p class="invalidFeedback">
                    {{usernameError}}
                </p> -->
            </section> 
            <!-- send to Profile page -->
            <section class="col-md-6 register">
                <h2>New registration</h2>
                <p>
                    By creating an account, you will be able to move through the checkout process faster, view and track your orders in your account and more.
                </p>
                <a class="btn btn-primary my-4" href="signin">Create an Account</a>
            </section>
        </div>
    </div>
</div>

{% endblock %}