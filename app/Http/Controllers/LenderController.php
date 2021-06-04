<?php

namespace App\Http\Controllers;

use App\Models\Lender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class LenderController extends Controller
{
    /**
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
        $users = Lender::select("*")->get();
        return view('admin.lender',['Users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    ###loading from to create new lenders
    public function create()
    {
       return view('admin.lenderform',['title'=>'Add New Lender']);
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' =>   ['required', 'string', 'max:255'],
            'email' =>   ['required', 'string', 'email', 'max:255', 'unique:lenders'],
            'business_name' => ['required', 'string', 'max:255'],
            'business_type' => ['required', 'string', 'max:255'],
            'revenue' => ['required', 'string', 'max:255'],
            'credit_score' => ['required', 'string', 'max:255'],
            'salary_from_business' => ['required', 'string', 'max:255'],
            'other_family_income' => ['required', 'string', 'max:255'],
            'bsnk_rupty' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect('lender/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {

             Lender::create([
                    'first_name' => $request['first_name'],
                    'last_name' => $request['last_name'],
                    'phone' => $request['phone'],
                    'email' => $request['email'],
                    'business_type' => $request['business_type'],
                    'business_name' => $request['business_name'],
                    'revenue' => $request['revenue'],
                    'credit_score' => $request['credit_score'],
                    'salary_from_business' => $request['salary_from_business'],
                    'other_family_income' => $request['other_family_income'],
                    'monthly_expenses' => $request['monthly_expenses'],
                    'bsnk_rupty' => $request['bsnk_rupty'],
                    'password' => Hash::make($request['password']),
                ]);
                return redirect('admin/lender')->with('success','New Lender Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lender  $lender
     * @return \Illuminate\Http\Response
     */
    public function show(Lender $lender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lender  $lender
     * @return \Illuminate\Http\Response
     */
        ### particular lender can be manipulat/ the record
         public function edit(Request $request, $id)
            {
                $idd= base64_decode($id);
                $user=Lender::find($idd);
                 return view('admin.lenderform',['title'=>'Edit Lender','user'=>$user]);
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
       $query="select * from lenders where id !='".$request['userid']."' and email='".$request['email']."'";
       $result=DB::select($query);
       if(!empty($result)){
        $emailvalid= ['required', 'string', 'email', 'max:255', 'unique:users'];
       }
       else
       {
            $emailvalid =  ['required', 'string', 'email', 'max:255'];
       }
      $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' =>   ['required', 'string', 'max:255'],
            'email' =>   $emailvalid,
            'business_name' => ['required', 'string', 'max:255'],
            'business_type' => ['required', 'string', 'max:255'],
            'revenue' => ['required', 'string', 'max:255'],
            'credit_score' => ['required', 'string', 'max:255'],
            'salary_from_business' => ['required', 'string', 'max:255'],
            'other_family_income' => ['required', 'string', 'max:255'],
            'bsnk_rupty' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect('lender/edit/'.base64_encode($request['userid']))
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {
                    Lender::where('id',$request['userid'])
                    ->update([
                            'first_name' => $request['first_name'],
                            'last_name' => $request['last_name'],
                            'phone' => $request['phone'],
                            'email' => $request['email'],
                            'business_type' => $request['business_type'],
                            'business_name' => $request['business_name'],
                            'revenue' => $request['revenue'],
                            'credit_score' => $request['credit_score'],
                            'salary_from_business' => $request['salary_from_business'],
                            'other_family_income' => $request['other_family_income'],
                            'monthly_expenses' => $request['monthly_expenses'],
                            'bsnk_rupty' => $request['bsnk_rupty'],
                            'password' => Hash::make($request['password']),
                 ]);
           return redirect('admin/lender')->with('success','Lender Record Updated Succesffully');
        } 
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
       Lender::where('id',$idd)->delete();
       return redirect('admin/lender')->with('success','Lender Delete Successfully');
    }

}
