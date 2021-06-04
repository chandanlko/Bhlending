@extends('admin.layout')
   
@section('admin.content')
                 <div class="card">
                      <div class="card-header"><a  href="{{url('admin/home')}}" class="btn btn-info pull-right"> <b align="left">Back</b> </a></div>
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
                  <form method="POST" action="{{url('lender/savedata')}}">
                  @else
                  <form method="POST" action="{{url('lender/saveedited')}}">
                  @endif
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name',isset($user->first_name)?$user->first_name:'') }}" autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('Lender',isset($user->last_name)?$user->last_name:'') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __(' Phone Name') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone',isset($user->phone)?$user->phone:'') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',isset($user->email)?$user->email:'') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="business_type" class="col-md-4 col-form-label text-md-right">{{ __(' Business Type') }}</label>

                            <div class="col-md-6">
                                <input id="business_type" type="text" class="form-control @error('business_type') is-invalid @enderror" name="business_type" value="{{ old('business_type',isset($user->business_type)?$user->business_type:'') }}" required autocomplete="business_type" autofocus>

                                @error('business_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    <div class="form-group row">
                            <label for="business_name" class="col-md-4 col-form-label text-md-right">{{ __(' Business Name') }}</label>

                            <div class="col-md-6">
                                <input id="business_name" type="text" class="form-control @error('business_name') is-invalid @enderror" name="business_name" value="{{ old('business_name',isset($user->business_name)?$user->business_name:'') }}" required autocomplete="business_name" autofocus>

                                @error('business_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="revenue" class="col-md-4 col-form-label text-md-right">{{ __(' Revenue') }}</label>

                            <div class="col-md-6">
                                <input id="revenue" type="text" class="form-control @error('revenue') is-invalid @enderror" name="revenue" value="{{ old('revenue',isset($user->revenue)?$user->revenue:'') }}" required autocomplete="revenue" autofocus>

                                @error('revenue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="credit_score" class="col-md-4 col-form-label text-md-right">{{ __(' Credit Score') }}</label>

                            <div class="col-md-6">
                                <input id="credit_score" type="text" class="form-control @error('credit_score') is-invalid @enderror" name="credit_score" value="{{ old('credit_score',isset($user->credit_score)?$user->credit_score:'') }}" required autocomplete="credit_score" autofocus>

                                @error('credit_score')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="salary_from_business" class="col-md-4 col-form-label text-md-right">{{ __(' Salary From Business') }}</label>

                            <div class="col-md-6">
                                <input id="salary_from_business" type="text" class="form-control @error('salary_from_business') is-invalid @enderror" name="salary_from_business" value="{{ old('salary_from_business',isset($user->salary_from_business)?$user->salary_from_business:'') }}" required autocomplete="salary_from_business" autofocus>

                                @error('salary_from_business')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="other_family_income" class="col-md-4 col-form-label text-md-right">{{ __(' Family Income') }}</label>

                            <div class="col-md-6">
                                <input id="other_family_income" type="text" class="form-control @error('other_family_income') is-invalid @enderror" name="other_family_income" value="{{ old('other_family_income',isset($user->other_family_income)?$user->other_family_income:'') }}" required autocomplete="other_family_income" autofocus>

                                @error('other_family_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="monthly_expenses" class="col-md-4 col-form-label text-md-right">{{ __(' Monthly Expenses') }}</label>

                            <div class="col-md-6">
                                <input id="monthly_expenses" type="text" class="form-control @error('monthly_expenses') is-invalid @enderror" name="monthly_expenses" value="{{ old('monthly_expenses',isset($user->monthly_expenses)?$user->monthly_expenses:'') }}" required autocomplete="monthly_expenses" autofocus>

                                @error('monthly_expenses')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="bsnk_rupty" class="col-md-4 col-form-label text-md-right">{{ __(' Bank Ruptcy') }}</label>

                            <div class="col-md-6">
                                <input id="bsnk_rupty" type="text" class="form-control @error('bsnk_rupty') is-invalid @enderror" name="bsnk_rupty" value="{{ old('bsnk_rupty',isset($user->bsnk_rupty)?$user->bsnk_rupty:'') }}" required autocomplete="bsnk_rupty" autofocus>

                                @error('bsnk_rupty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" value="{{isset($user->id)?$user->id:''}}" name="userid">

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
