<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Lender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class LoanController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    ###loading the list of lenders
    public function index()
    {
        $loan = Loan::select("*")->get();
        
        return view('admin.loan',['loan'=>$loan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    ###loading from to create new lenders
    public function create()
    {
       $lender = Lender::select("*")->get();
       return view('admin.loanform',['title'=>'Add New Loan','lender'=>$lender]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    ###after submitting the form of lender creation thne we can check  validations and creats new Record
    public function store(Request $request)
    {
             $validator = Validator::make($request->all(), [
             'lenderid' => ['required', 'string', 'max:255'],
            'loan_amount' => ['required', 'string', 'max:255'],
            'duration' =>   ['required', 'string', 'max:255'],
            'avarage_monthly_income' => ['required', 'string', 'max:255'],
            'business_type' => ['required', 'string', 'max:255'],
            'credit_score' => ['required', 'string', 'max:255'],
            'request_reason' => ['required', 'string', 'max:255'],
            ]);
        if ($validator->fails()) {
            return redirect('loan/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {

             Loan::create([
                    'lenderid' => $request['lenderid'],
                    'loan_amount' => $request['loan_amount'],
                    'duration' => $request['duration'],
                    'avarage_monthly_income' => $request['avarage_monthly_income'],
                    'business_type' => $request['business_type'],
                    'credit_score' => $request['credit_score'],
                    'request_reason' => $request['request_reason'],
                    'status' =>0
                                     
                ]);
                return redirect('admin/loan')->with('success','New Loan Created Successfully');
        }
    }

   
        ### particular lender can be manipulat/ the record
         public function edit(Request $request, $id)
            {
                $idd= base64_decode($id);
                $loan=Loan::find($idd);
                $lender = Lender::select("*")->get();
                 return view('admin.loanform',['title'=>'Edit Loan','loan'=>$loan,'lender'=>$lender]);
            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lender  $lender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lender $lender)
    {
        $validator = Validator::make($request->all(), [
            'lenderid' => ['required', 'string', 'max:255'],
            'loan_amount' => ['required', 'string', 'max:255'],
            'duration' =>   ['required', 'string', 'max:255'],
            'avarage_monthly_income' => ['required', 'string', 'max:255'],
            'business_type' => ['required', 'string', 'max:255'],
            'credit_score' => ['required', 'string', 'max:255'],
            'request_reason' => ['required', 'string', 'max:255'],
            ]);
        if ($validator->fails()) {
            return redirect('loan/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {
                Loan::where('id',$request['userid'])
                    ->update([
                    'lenderid' => $request['lenderid'],
                    'loan_amount' => $request['loan_amount'],
                    'duration' => $request['duration'],
                    'avarage_monthly_income' => $request['avarage_monthly_income'],
                    'business_type' => $request['business_type'],
                    'credit_score' => $request['credit_score'],
                    'request_reason' => $request['request_reason'],
                    'status' =>0
                                     
                ]);
        }
           return redirect('admin/loan')->with('success','Loan Record Updated Succesffully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lender  $lender
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
       $idd= base64_decode($id);
       Loan::where('id',$idd)->delete();
       return redirect('admin/loan')->with('success','Loan Record Delete Successfully');
    }
}
