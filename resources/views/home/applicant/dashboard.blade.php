@extends('home.applicant.layout')
   
@section('home.applicant.content')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                          Welcome {{getlenderdata($applicant_id)->first_name}}
                        </div>
                        </div>
                    </main>
</div>
@endsection