<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $users = Investor::select("*")->get();
        return view('admin.investor',['Users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    ###loading from to create new lenders
    public function create()
    {
       return view('admin.investorform',['title'=>'Add New Investor']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    ###after submitting the form of investor creation thne we can check  validations and creats new Record
    public function store(Request $request)
    {
             $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' =>   ['required', 'string', 'max:255'],
            'email' =>   ['required', 'string', 'email', 'max:255', 'unique:lenders'],
            'address' => ['required', 'string', 'max:255'],
            'invested_amount' => ['required', 'string', 'max:255'],
            'offer_rate' => ['required', 'string', 'max:255'],
            'birth_place' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'citizenship' => ['required', 'string', 'max:255'],
            'investment_type' => ['required', 'string', 'max:255'],
            'investor_type' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect('investor/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {

             Investor::create([
                    'first_name' => $request['first_name'],
                    'last_name' => $request['last_name'],
                    'phone' => $request['phone'],
                    'email' => $request['email'],
                    'address' => $request['address'],
                    'invested_amount' => $request['invested_amount'],
                    'offer_rate' => $request['offer_rate'],
                    'birth_place'=>$request['birth_place'],
                    'dob' => $request['dob'],
                    'citizenship' => $request['citizenship'],
                    'investment_type' => $request['investment_type'],
                    'investor_type' => $request['investor_type'],
                    'status' => 0,
                    'password' => Hash::make($request['password']),
                ]);
                return redirect('admin/investor')->with('success','New Investor Created Successfully');
        }
    }

    
        ### particular lender can be manipulat/ the record
         public function edit(Request $request, $id)
            {
                $idd= base64_decode($id);
                $user=Investor::find($idd);
                return view('admin.investorform',['title'=>'Edit Investor','user'=>$user]);
            }

  
    public function update(Request $request, Investor $Investor)
    {
       $query="select * from investors where id !='".$request['userid']."' and email='".$request['email']."'";
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
            'email' => $emailvalid,
            'address' => ['required', 'string', 'max:255'],
            'invested_amount' => ['required', 'string', 'max:255'],
            'offer_rate' => ['required', 'string', 'max:255'],
            'birth_place' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'citizenship' => ['required', 'string', 'max:255'],
            'investment_type' => ['required', 'string', 'max:255'],
            'investor_type' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect('investor/edit/'.base64_encode($request['userid']))
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {
                    Investor::where('id',$request['userid'])
                    ->update([
                    'first_name' => $request['first_name'],
                    'last_name' => $request['last_name'],
                    'phone' => $request['phone'],
                    'email' => $request['email'],
                    'birth_place'=>$request['birth_place'],
                    'address' => $request['address'],
                    'invested_amount' => $request['invested_amount'],
                    'offer_rate' => $request['offer_rate'],
                    'dob' => $request['dob'],
                    'citizenship' => $request['citizenship'],
                    'investment_type' => $request['investment_type'],
                    'investor_type' => $request['investor_type'],
                    'status' => 0,
                    'password' => Hash::make($request['password']),
                ]);
           return redirect('admin/investor')->with('success','Investor Record Updated Succesffully');
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
       Investor::where('id',$idd)->delete();
       return redirect('admin/investor')->with('success','Investor Delete Successfully');
    }

}
