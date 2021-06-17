@extends('home.layout')
   
@section('home.content')
    <section class="login-screen">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1> Let's Get <span class="colorBlue">Started!</span> </h1>
                    <div class="text-center fontWeight600"> First Thing First, Are You. </div>
                </div>
                <div class="col-md-8 d-flex margin-auto mt-5">
                   <div class="col-md-4"> <button class="btn blue-btn"> As an Investor</button> </div>
                    <div class="col-md-3 ml-3 mr-3 text-center orText"> Or </div>  
                  <div class="col-md-4"> <a href="{{url('register_applicant')}}"> <button class="btn outer-line-btn"> As an Applicant</button> </a></div>
                </div>
        </div>
    </section>


@endsection

   