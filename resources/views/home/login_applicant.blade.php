 
@extends('home.layout')
   
@section('home.content')

 <section class="login-screen">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="login-banner">
                        <img src="{{asset('home/img/loanimg.png')}}" alt="loan" class="loan-img-item">
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="login-form">
                        <form action="{{url('loginapplicant')}}" class="loan-login-form" method="post">
                            <h1 class="welcome-loan">Welcome to <span class="uppercase-font">bhlending</span></h1>
                             @if ($message = Session::get('success'))
                                <div class="alert alert-info alert-block">
                                  <strong>{{ $message }}</strong>
                                </div>
                              @endif
                            <div class="login-control-form">
                                <div class="form-group input-icon mb-4">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" name="email"value="{{ old('email')}}">
                                </div>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @csrf
                                <div class="form-group input-icon">
                                    <button type="button" id="btnToggle" class="toggle"><i id="eyeIcon"
                                            class="fa fa-eye eyeicon"></i></button>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Enter your password" name="password" value="{{ old('password')}}">
                                </div>
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="flex-row-remember form-group">
                                    <div class="remember_me-inputs">
                                        <input type="checkbox" class="remember-me" name="remember" id="remember">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                    <div class="forgot-pasword"><a href="{{url('forget_password')}}" class="forgot-link">forgot password ?</a>
                                    </div>
                                </div>
                                <div class="login-row">
                                    <input type="submit" value="login" class="login-btn">
                                </div>
                                <div class="text-center mt-3 ">Not registered yet? <a href="{{url('register_applicant')}}" class="forgot-link"> Create an account</a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection