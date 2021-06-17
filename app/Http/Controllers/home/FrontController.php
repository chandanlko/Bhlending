<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Lender;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Loan;
use Illuminate\Support\Facades\Session;


class FrontController extends Controller
{
   	public function index()
   	{
   		return view('home.get_started');
   	}
   	public function register_applicant()
   	{
   		return view('home.register_applicant');
   	}
   	public function login_applicant()
   	{
   		return view('home.login_applicant');
   	}
   	public function registration_applicant(Request $request)
   	{
   		//print_r($_POST); die;
   		$data=[
                    'first_name' => $_POST['fname'],
                    'last_name' => $_POST['lname'],
                    'phone' => $_POST['phone'],
                    'email' => $_POST['email'],
                    'dob' => $_POST['dob'],
                    'address' => $_POST['address'],
                    'vat' => $_POST['vat'],
                    'id_lender' => $_POST['identity'],
                    'password' => Hash::make(12345678),
                    'status'=>0 
                ];
       // print_r($data);
   		$lastid=Lender::create($data)->id;
   		Loan::create([
                    'lenderid' => $lastid,
                    'loan_amount' => $_POST['loanamount'],
                    'duration' => $_POST['tenure-duration'],
                    'avarage_monthly_income' => $_POST['monthlyincome'],
                    'business_type' => $_POST['business-type'],
                    'credit_score' => $_POST['creditscore'],
                    'request_reason' => $_POST['reason'],
                    'status' =>0
                                     
                ]);
   	return redirect('login_applicant')->with('success','Applicant Registration Successfully');
   		
   	}
   	public function loginapplicant(Request $req)
   	{
   		//return $req;
   		$validator = Validator::make($req->all(), [
             'email' =>   ['required', 'string', 'email', 'max:255'],
             'password' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) {
            return redirect('login_applicant')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {
        	$validate_admin = Lender::where('email', $req->email)
                            ->first();
         	if($validate_admin && Hash::check($req->password, $validate_admin->password)) {
		  		if($validate_admin->status==0)
		  		{
		  		  return redirect('login_applicant')->with('success','Applicant is not active');
		  		}
		  		else
		  		{
		  			Session::put('userlogin_id', $validate_admin->id);
		  			return redirect('applicant_dashboard')->with('success','login Successfully');
		  		}
			}
			else
			{
				 return redirect('login_applicant')->with('success','Email Or Password is Invalid');
			}
        	
        }
   	}
   	public function forget_password()
   	{
   		return view('home.forget_password');
   	}
   	public function applicantlogout()
   	{
       Session::get('userlogin_id');
      
   		Session::forget('userlogin_id'); 
   		return redirect('/login_applicant')->with('success','logout Succesfully.');
   	}
}
