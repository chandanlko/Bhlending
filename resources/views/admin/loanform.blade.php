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
                            <label for="avarage_monthly_income" class="col-md-4 col-form-label text-md-right">{{ __('Average Monthly Income') }}</label>

                            <div class="col-md-6">
                                <input id="avarage_monthly_income" type="text" class="form-control @error('avarage_monthly_income') is-invalid @enderror" name="avarage_monthly_income" value="{{ old('avarage_monthly_income',isset($loan->avarage_monthly_income)?$loan->avarage_monthly_income:'') }}" required autocomplete="avarage_monthly_income" autofocus>

                                @error('avarage_monthly_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>

                            <div class="col-md-6">
                                <select  class="form-control @error('duration') is-invalid @enderror" name="duration">
                                    <option value="">Tenure/Duration</option>
                                    <option value="6 Month">6 Month</option>
                                    <option value="1 Year">1 Year</option>
                                    <option value="2 Year">2 Year</option>
                                    <option value="3 Year">3 Year</option>
                                </select>

                                @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="business_type" class="col-md-4 col-form-label text-md-right">{{ __('Business Type') }}</label>

                            <div class="col-md-6">
                                    <select class="form-control @error('business_type') is-invalid @enderror"  name="business_type">
                                        <option value="">Business Type</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="Sole proprietorship"> Sole proprietorship</option>
                                        <option value="Corporation - C corp">Corporation - C corp</option>
                                        <option value="Corporation - B corp">Corporation - B corp</option>
                                        <option value="Corporation - S corp">Corporation - S corp</option>
                                        <option value="Flexibility">Flexibility</option>
                                    </select>

                             

                                @error('business_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="userid" value="@if(isset($loan->id)){{$loan->id}} @endif">
                        <div class="form-group row">
                            <label for="credit_score" class="col-md-4 col-form-label text-md-right">{{ __('Credit Score') }}</label>

                            <div class="col-md-6">
                                <input id="credit_score" type="text" class="form-control @error('credit_score') is-invalid @enderror" name="credit_score" value="{{ old('credit_score',isset($loan->credit_score)?$loan->credit_score:'') }}" required autocomplete="credit_score">

                                @error('credit_score')
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

                         <div class="form-group row">
                            <label for="request_reason" class="col-md-4 col-form-label text-md-right">{{ __('Reason of the Request') }}</label>

                            <div class="col-md-6">
                                <input id="request_reason" type="text" class="form-control @error('request_reason') is-invalid @enderror" name="request_reason" value="{{ old('request_reason',isset($loan->request_reason)?$loan->request_reason:'') }}" required autocomplete="request_reason">

                                @error('request_reason')
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
