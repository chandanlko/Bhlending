@extends('admin.layout')
   
@section('admin.content')

                    <!-- Page Heading -->
                    
                      <div class="card">
                      <div class="card-header"><a  href="{{url('lender/add')}}" class="btn btn-info pull-right"> <b align="left">Add New Lender</b> </a></div>
                        @if ($message = Session::get('success'))
                    <div class="alert alert-info alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button> 
                      <strong>{{ $message }}</strong>
                    </div>
                  @endif
                    </div>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User Lists</h6>
                        </div>
                        <div class="card-body">
                      <table class="table table-bordered data-table" id="table_id">
                    <thead>

                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(!empty($Users))
                      @foreach($Users as $key=>$uservalues)
                      <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$uservalues->first_name}}</td>
                        <td>{{$uservalues->last_name}}</td>
                        <td>{{$uservalues->phone}}</td>
                        <td>{{$uservalues->email}}</td>
                        <td><a onclick="return confirm('Are you sure to Delete?')" href="{{url('lender/delete/'.base64_encode($uservalues->id))}}"><i class="fa fa-trash"></i></a>&nbsp;<a  href="{{url('lender/edit/'.base64_encode($uservalues->id))}}"> <i class="fa fa-edit"></i> </a></td>
                      </tr>
                      @endforeach
                      @endif
                      
                    </tbody>
                  </table>
                        </div>
                    </div>

       

@endsection
