@extends('Layout.format')

@section('title','Login')
@section('body-id','login-body')

<!-- Left side of the login page - with form -->
@section('login-left-side')
    <form class="login-form d-flex justify-content-center align-items-center" style="">
        <div class="row form-container text-center justify-content-center" style="">
            <div class="col-12 form-group justify-content-center align-items-center" >
                <h4 class="form-title">log in</h4>
            </div>
            <div class="col-9 m-0 form-group justify-content-center">
                <input type="text" class="w-100 input-element" placeholder="Username"/>
            </div>
            <div class="col-9  m-0 form-group justify-content-center">
                <input type="password" class="w-100 input-element" placeholder="Password" />
            </div>
            <div class="col-6 form-group justify-content-center align-items-center">
                <button class="btn btn-primary w-100 login-button"> Log in </button>
            </div>
        </div>
        <a href="#" class="forgot-password">Forgot password</a>
    </form>

@stop
<!-- Center part of the login page - where is the 'or' text -->
@section('login-center-side')
    <span class="text-container">
        <span class="o-color">o</span>
        <span class="r-color">r</span>
    </span>
@stop

<!-- Right part of the login page - the one with the 'Create a new account' button -->
@section('login-right-side')
    <a href="#" class="btn btn-primary sign-up-button d-flex align-items-center">
        Create a new account
    </a>
@stop

@section('login-header')
    <div class="row m-0 ">
        <div class="col-12 col-sm-5 d-flex justify-content-center align-items-center header-text header-left-text">
            <h6>Welcome</h6>
        </div>
        <div class="col-12 col-sm-2 d-none d-sm-flex">
        </div>
        <div class="col-12 col-sm-5 d-none d-sm-flex justify-content-center align-items-center header-text header-right-text">
            <h6>New member ?</h6>
        </div>
    </div>

@stop
@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="col-12 header-container" >
            @yield('login-header')
        </div>
        <div class="row m-0 w-100 h-100">
            <div class="left-side col-12 col-sm-5 d-flex justify-content-center align-items-center">
                @yield('login-left-side')
            </div>
            <div class="center-side col-12 col-sm-2 d-flex justify-content-center align-items-center ">
                @yield('login-center-side')
            </div>
            <div class="right-side col-12 col-sm-5 d-flex justify-content-center align-items-center ">
                @yield('login-right-side')
            </div>

        </div>
    </div>
@stop
