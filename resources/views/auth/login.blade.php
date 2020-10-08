@extends('layouts.layout')


@section('style_css')
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
@endsection
@section('title','Login')
   

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row">
        <div class="col-md-4 col-12 col-sm-12 mx-auto  py-4 px-5 my-4 login_div shadow ">
        <form class="login_form"  method="POST" action="{{ route('login') }}">
                @csrf
                <h3 class="display-5 text-center">{{ __('Login') }}</h3>
                <hr class="w-50 mx-auto my-4">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                   
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type Your Email Address">
                        @error('email')
                        <div class="invalid-feedback" role="alert">
                            
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                        
                        {{-- <i class="fas fa-envelope my-auto"></i><input type="email" name="email " class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Type Your Email Adress" aria-describedby="emailHelp"> --}}
                    
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Type Your Password">

                                @error('password')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                        {{-- <i class="fas fa-lock my-auto"></i><input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Type Your Password" id="password" > --}}
                   
                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-block">  {{ __('Login') }}</button>
                </div>
            </form>
            
            <div class="Login_through_api">
                <div class="d-flex  my-4">
                    <hr class="w-25 ml-auto mr-1"><P class="">or singup using</P><hr class="w-25 mr-auto ml-1">
                </div>
                <div class="API d-flex justify-content-center">
                    <a href="{{ url('auth/google') }}" class="btn btn-danger m-2 p-3 btn_google"><i class="fab fa-google fa-2x"></i></a>
                    <a href="http://" class="btn btn-primary m-2 p-3 btn-facebook"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="http://" class="btn btn-success m-2 p-3 btn-twitter"><i class="fab fa-twitter fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
