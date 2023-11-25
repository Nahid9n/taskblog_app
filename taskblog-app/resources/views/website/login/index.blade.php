@extends('website.master')
@section('title','User Login Page')
@section('body')
    <!-- end preloader -->
    <div class="wpo-login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">{{session('message')}}</p>
                    <form class="wpo-accountWrapper" action="{{route('user.login')}}" method="POST">
                        @csrf
                        <div class="wpo-accountInfo">
                            <div class="wpo-accountInfoHeader">
                                <a href="#"><img src="{{asset('/')}}website/assets/images/logo2.png" alt=""></a>
                                <a class="wpo-accountBtn" href="{{route('user.register')}}">
                                    <span class="">Create Account</span>
                                </a>
                            </div>
                            <div class="image">
                                <img src="{{asset('/')}}website/assets/images/login.svg" alt="">
                            </div>
                            <div class="back-home">
                                <a class="wpo-accountBtn" href="{{route('home')}}">
                                    <span class="">Back To Home</span>
                                </a>
                            </div>
                        </div>
                        <div class="wpo-accountForm form-style">
                            <div class="fromTitle">
                                <h2>Login</h2>
                                <p>Sign into your pages account</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <label>Email</label>
                                    <input type="text" id="email" name="email" placeholder="user email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="pwd6" type="password" placeholder="" value="password" name="password">
                                        <span class="input-group-btn">
                                                <button class="btn btn-default reveal6" type="button"><i
                                                        class="ti-eye"></i></button>
                                            </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="check-box-wrap">
                                        <div class="input-box">
                                            <input type="checkbox" id="remember" name="remember" value="Strawberry">
                                            <label for="remember">Remember Me</label>
                                        </div>
                                        <div class="forget-btn">
                                            <a href="forgot.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button type="submit" class="wpo-accountBtn">Login</button>
                                </div>
                            </div>
                            <h4 class="or"><span>OR</span></h4>
                            <ul class="wpo-socialLoginBtn">
                                <li><button class="facebook" tabindex="0" type="button"><span><i
                                                class="ti-facebook"></i></span></button></li>
                                <li><button class="twitter" tabindex="0" type="button"><span><i
                                                class="ti-twitter"></i></span></button></li>
                                <li><button class="linkedin" tabindex="0" type="button"><span><i
                                                class="ti-linkedin"></i></span></button></li>
                            </ul>
                            <p class="subText">Don't have an account? <a href="register.html">Create free
                                    account</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
