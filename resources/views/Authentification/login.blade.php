@extends('Layout.format')

@section('title','Login')
@section('body-id','login-body')

@section('login-left-side')

    <form class="login-form" style="border:1px solid #FFFFEF">
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


    </form>

@stop

@section('login-center-side')
    <span class="text-container" style="margin:15px 0;">
        <span class="o-color">o</span>
        <span class="r-color">r</span>
    </span>
@stop

@section('login-right-side')
    <a href="#" class="btn btn-primary sign-up-button d-flex align-items-center" style="border:1px solid #8CC5DE;text-transform:uppercase; text-decoration:none; padding:15px;font-size:18px; margin:15px 0;background-color: #FFFFEF;color: #4E759C;font-weight:bold;height:60px;">
        Create a new account
    </a>
@stop
@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center" style="position:relative">
        <div class="col-12" style="position:absolute; top:0;">
            <div class="row m-0 ">
                <div class="col-12 col-sm-5 d-flex justify-content-center align-items-center" style="color:#4E759C; padding:10px; " >
                    <h6>Welcome</h6>
                </div>
                <div class="col-12 col-sm-2 d-none d-sm-flex">
                </div>
                <div class="col-12 col-sm-5 d-none d-sm-flex justify-content-center align-items-center" style="color:#FFFFEF;padding:10px; ">
                    <h6>New member ?</h6>
                </div>
            </div>
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
