@extends('admin.layout')
   
@section('admin.content')

                 <div class="card">
                      <div class="card-header"><a  href="{{url('admin/investor')}}" class="btn btn-info pull-right"> <b align="left">Back</b> </a></div>
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
                  <form method="POST" action="{{url('investor/savedata')}}">
                  @else
                  <form method="POST" action="{{url('investor/saveedited')}}">
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
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __(' Last Name') }}</label>

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
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('business_type') is-invalid @enderror" name="address" value="{{ old('address',isset($user->address)?$user->address:'') }}" required autocomplete="address" autofocus>

                                @error('business_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    <div class="form-group row">
                            <label for="invested_amount" class="col-md-4 col-form-label text-md-right">{{ __('Invested Amount') }}</label>

                            <div class="col-md-6">
                                <input id="invested_amount" type="text" class="form-control @error('invested_amount') is-invalid @enderror" name="invested_amount" value="{{ old('invested_amount',isset($user->invested_amount)?$user->invested_amount:'') }}" required autocomplete="invested_amount" autofocus>

                                @error('invested_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="offer_rate" class="col-md-4 col-form-label text-md-right">{{ __(' Offer Rate') }}</label>

                            <div class="col-md-6">
                                <input id="offer_rate" type="text" class="form-control @error('offer_rate') is-invalid @enderror" name="offer_rate" value="{{ old('offer_rate',isset($user->offer_rate)?$user->offer_rate:'') }}" required autocomplete="offer_rate" autofocus>

                                @error('offer_rate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="birth_place" class="col-md-4 col-form-label text-md-right">{{ __('Birth Place') }}</label>

                            <div class="col-md-6">
                                <input id="birth_place" type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place" value="{{ old('birth_place',isset($user->birth_place)?$user->birth_place:'') }}" required autocomplete="birth_place" autofocus>

                                @error('birth_place')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob',isset($user->dob)?$user->dob:'') }}" required autocomplete="dob" autofocus>

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="citizenship" class="col-md-4 col-form-label text-md-right">{{ __('Citizenship') }}</label>

                            <div class="col-md-6">
                                <input id="citizenship" type="text" class="form-control @error('citizenship') is-invalid @enderror" name="citizenship" value="{{ old('citizenship',isset($user->citizenship)?$user->citizenship:'') }}" required autocomplete="citizenship" autofocus>

                                @error('citizenship')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="investment_type" class="col-md-4 col-form-label text-md-right">{{ __('Investment Type') }}</label>

                            <div class="col-md-6">
                                <input id="investment_type" type="text" class="form-control @error('investment_type') is-invalid @enderror" name="investment_type" value="{{ old('investment_type',isset($user->investment_type)?$user->investment_type:'') }}" required autocomplete="investment_type" autofocus>

                                @error('investment_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="investor_type" class="col-md-4 col-form-label text-md-right">{{ __('Investor Type') }}</label>

                            <div class="col-md-6">
                                <select class="form-control @error('investor_type') is-invalid @enderror" id="investor_type" name="investor_type">
                                     <option value="1" <?php if(isset($user->investor_type) && $user->investor_type=='1') { echo "selected"; } ?>>Private Investor</option>
                                     <option value="2" <?php if(isset($user->investor_type) && $user->investor_type=='2') { echo "selected"; } ?>>Financial institutions</option>
                                </select>
                               

                                @error('investor_type')
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
