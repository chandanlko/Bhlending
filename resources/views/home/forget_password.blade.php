  
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
                        <form action="#" class="loan-login-form">
                            <h1 class="welcome-loan">Forgot Your Password </h1>
                            <div class="login-control-form">
                                <div class="form-group input-icon mb-4">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="login-row">
                                    <input type="text" value="Recover my account" class="login-btn text-center">
                                </div>
                                <div class="text-center mt-3 "> <a href="/login_applicant" class="forgot-link"> Back to Login</a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection