@extends('admin.layout')
   
@section('admin.content')

                    <!-- Page Heading -->
                     <?php $roleid=Auth::user()->is_admin; ?>
                      <div class="card">
                      <div class="card-header">
                         @if($roleid==1)
                        <a  href="{{url('investor/add')}}" class="btn btn-info pull-right"> <b align="left">Add New Investor</b> </a>
                         @endif
                      </div>
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
                            <h6 class="m-0 font-weight-bold text-primary">Investor's Lists</h6>
                        </div>
                        <div class="card-body">
                      <table class="table table-bordered data-table" id="table_id">
                    <thead>

                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name /institution Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">investor Type</th>
                         <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(!empty($Users))
                      @foreach($Users as $key=>$uservalues)
                      <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$uservalues->first_name}} {{$uservalues->last_name}} {{$uservalues->institution_name}}</td>
                        <td>{{$uservalues->phone}}</td>
                        <td>{{$uservalues->email}}</td>
                        <td>
                          @if($uservalues->investor_type==1)
                          Private Investor 
                          @else
                          Financial Institution
                          @endif

                          </td>

                           <td><a onclick="return confirm('Are you sure ?')" href="{{url('investor/status/'.base64_encode($uservalues->id))}}">

                          @if($uservalues->status==1) 
                          <span class="badge badge-info">Active</span> 
                          @else 
                          <span class="badge badge-danger">Inactive</span> 
                        @endif</a></td>
                        <td>
                           @if($roleid==1)
                          <a onclick="return confirm('Are you sure to Delete?')" href="{{url('investor/delete/'.base64_encode($uservalues->id))}}"><i class="fa fa-trash"></i></a>&nbsp;<a  href="{{url('investor/edit/'.base64_encode($uservalues->id))}}"> <i class="fa fa-edit"></i> </a>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                      @endif
                      
                    </tbody>
                  </table>
                        </div>
                    </div>

       

@endsection
