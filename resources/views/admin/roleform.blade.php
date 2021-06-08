@extends('admin.layout')
   
@section('admin.content')
                 <div class="card">
                      <div class="card-header"><a  href="{{url('admin/role')}}" class="btn btn-info pull-right"> <b align="left">Back</b> </a></div>
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
                            <h6 class="m-0 font-weight-bold text-primary">{{$title}}</h6>
                        </div>
                <div class="card-body">
                  @if(!isset($user))
                  <form method="POST" action="{{url('role/savedata')}}">
                  @else
                  <form method="POST" action="{{url('role/saveedited')}}">
                  @endif
                        @csrf

                        <input type="hidden" value="{{isset($user->id)?$user->id:''}}" name="userid">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',isset($user->name)?$user->name:'') }}" autocomplete="name" autofocus>
                            </div>
                        </div>
                             @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                   
            
@endsection
