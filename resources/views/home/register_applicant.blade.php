@extends('home.layout')
   
@section('home.content')

<section class="register-screen">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="center-register-form">
                        <div class="container-fluid">
                            <div class="col-lg-12 col-12">
                                <div class="register-tab-container">
                                    <form id="regForm" action="{{url('registration_applicant')}}" method="post">
                                        <!-- Circles which indicates the steps of the form: -->
                                        <div class="tab-shows-steps">
                                            <span class="step">
                                                <div class="line-valid">
                                                    <div class="circle-digit"><span class="steps-digit">1</span>
                                                    <p class="steps-name">General information</p>
                                                    </div>
                                                </div>
                                            </span>
                                            @csrf
                                            <span class="step">
                                                <div class="line-valid">
                                                    <div class="circle-digit"><span class="steps-digit">2</span>
                                                    <p class="steps-name">Loan information</p>
                                                    </div>
                                                </div>
                                            </span>
                                          </div>
                                        <!-- One "tab" for each step in the form: -->
                                        <div class="tab">
                                          <div class="container-fluid">
                                              <div class="row">
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="First Name" oninput="this.className = ''" name="fname">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Last Name" oninput="this.className = ''" name="lname">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Phone Number" maxlength="10" pattern="[0-9]{10}" oninput="this.className = ''" name="phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Address" oninput="this.className = ''" name="address">
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="ID" oninput="this.className = ''" name="identity">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Email" oninput="this.className = ''" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="date" placeholder="DOB" oninput="this.className = ''" name="dob">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="VAT" oninput="this.className = ''" name="vat">
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="tab">
                                            <!-- Second Tab -->
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                      <div class="form-group">
                                                          <input type="text" placeholder="Loan Amount" oninput="this.className = ''" name="loanamount" pattern="[0-9]{10}">
                                                      </div>
                                                      <div class="form-group">
                                                          <select oninput="this.className = ''" name="tenure-duration">
                                                            <option value="">Tenure/Duration</option>
                                                              <option value="6 Month">6 Month</option>
                                                              <option value="1 Year">1 Year</option>
                                                              <option value="2 Year">2 Year</option>
                                                              <option value="3 Year">3 Year</option>
                                                          </select>
                                                      </div>
                                                      <div class="form-group">
                                                          <input type="text" placeholder="Estimated Credit Score" pattern="[0-9]{10}" oninput="this.className = ''" name="creditscore">
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Average Monthly Income" pattern="[0-9]{10}" oninput="this.className = ''" name="monthlyincome">
                                                        </div>
                                                      <div class="form-group">
                                                        <select oninput="this.className = ''" name="business-type">
                                                            <option value="">Business Type</option>
                                                              <option value="Partnership">Partnership</option>
                                                              <option value="Sole proprietorship">Sole proprietorship</option>
                                                              <option value="Corporation - C corp">Corporation - C corp</option>
                                                              <option value="Corporation - B corp">Corporation - B corp</option>
                                                              <option value="Corporation - S corp">Corporation - S corp</option>
                                                              <option value="Flexibility">Flexibility</option>
                                                          </select>
                                                      </div>
                                                      <div class="form-group">
                                                          <input type="text" placeholder="Reason of the request" oninput="this.className = ''" name="reason">
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="overflow:auto;">
                                            <div class="button-registers">
                                              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Back</button>
                                              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                            </div>
                                          </div>
                                       
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection