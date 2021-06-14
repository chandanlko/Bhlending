@extends('admin.layout')
   
@section('admin.content')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Lenders</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-balck stretched-link" href="#"><h2>{{$countvalue['lender']}}</h2></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Investor</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-balck stretched-link" href="#"><h2>{{$countvalue['investor']}}</h2></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Total Roles</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-balck stretched-link" href="#"><h2>{{$countvalue['roles']}}</h2></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-balck stretched-link" href="#"><h2>{{$countvalue['lender']}}</h2></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                    </main>
</div>
@endsection