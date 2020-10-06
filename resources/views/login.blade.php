@extends('layouts.layout')

@section('style_css')
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
@endsection
@section('title','Login')
   

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 col-sm-12 mx-auto  py-4 px-5 my-4 login_div shadow ">
                <form class="login_form">
                    <h3 class="display-5 text-center">Login</h3>
                    <hr class="w-50 mx-auto my-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <div class="d-flex form_input_div">
                            <i class="fas fa-envelope my-auto"></i><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Type Your Email Adress" aria-describedby="emailHelp">
                        </div>
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <div class="d-flex form_input_div">
                        <i class="fas fa-lock my-auto"></i><input type="password" class="form-control" placeholder="Type Your Password" id="exampleInputPassword1">
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn btn-block" value="Login">
                    </div>
                </form>
                
                <div class="Login_through_api">
                    <div class="d-flex  my-4">
                        <hr class="w-25 ml-auto mr-1"><P class="">or singup using</P><hr class="w-25 mr-auto ml-1">
                    </div>
                    <div class="API d-flex justify-content-center">
                        <a href="http://" class="btn btn-danger m-2 p-3 btn_google"><i class="fab fa-google fa-2x"></i></a>
                        <a href="http://" class="btn btn-primary m-2 p-3 btn-facebook"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="http://" class="btn btn-success m-2 p-3 btn-twitter"><i class="fab fa-twitter fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection