@extends('admin.layout')
   
@section('admin.content')
                 <div class="card">
                      <div class="card-header"><a  href="{{url('admin/loan')}}" class="btn btn-info pull-right"> <b align="left">Back</b> </a></div>
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
                  @if(!isset($loan))
                  <form method="POST" action="{{url('loan/savedata')}}">
                  @else
                  <form method="POST" action="{{url('loan/saveedited')}}">
                  @endif
                        @csrf

                        <div class="form-group row">
                            <label for="loan_amount" class="col-md-4 col-form-label text-md-right">{{ __('Loan Amount') }}</label>

                            <div class="col-md-6">
                                <input id="loan_amount" type="text" class="form-control @error('loan_amount') is-invalid @enderror" name="loan_amount" value="{{ old('loan_amount',isset($loan->loan_amount)?$loan->loan_amount:'') }}" required autocomplete="loan_amount" autofocus>

                                @error('loan_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>

                            <div class="col-md-6">
                                <input id="duration" type="duration" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration',isset($loan->duration)?$loan->duration:'') }}" required autocomplete="duration">

                                @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="loan_type" class="col-md-4 col-form-label text-md-right">{{ __('Loan Type') }}</label>

                            <div class="col-md-6">
                                <input id="loan_type" type="text" class="form-control @error('loan_type') is-invalid @enderror" name="loan_type" value="{{ old('loan_type',isset($loan->loan_type)?$loan->loan_type:'') }}" required autocomplete="loan_type" autofocus>

                                @error('loan_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                <input type="hidden" name="userid" value="@if(isset($loan->id)){{$loan->id}} @endif">
                        <div class="form-group row">
                            <label for="interest" class="col-md-4 col-form-label text-md-right">{{ __('Interest') }}</label>

                            <div class="col-md-6">
                                <input id="interest" type="text" class="form-control @error('interest') is-invalid @enderror" name="interest" value="{{ old('interest',isset($loan->interest)?$loan->interest:'') }}" required autocomplete="interest">

                                @error('interest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="lenderid" class="col-md-4 col-form-label text-md-right">{{ __('Select Lender') }}</label>

                            <div class="col-md-6">
                                <select id="lenderid"  class="form-control @error('lenderid') is-invalid @enderror" name="lenderid" required autocomplete="lenderid">
                                    @if(!empty($lender))
                                    @foreach($lender as $values)
                                     <option value="{{$values->id}}" <?php if(isset($loan)) { if($values->id==$loan->lenderid) echo "selected"; } ?> >{{$values->first_name}}
                                    </option>
                                    @endforeach
                                    @endif
                                </select>
                               
                                @error('lenderid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
