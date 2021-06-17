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
            'dob' => ['required', 'string', 'max:255'],
            'vat' => ['required', 'string', 'max:255'],
            'id_lender' => ['required', 'string', 'max:255'],
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
                    'dob' => $request['dob'],
                    'address' => $request['address'],
                    'vat' => $request['vat'],
                    'id_lender' => $request['id_lender'],
                    'password' => Hash::make($request['password']),
                    'status'=>0 
                ]);

       
        return redirect('admin/lender')->with('success','New Lender Created Successfully');
        }
    }

    
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
            'email' =>  $emailvalid,
            'dob' => ['required', 'string', 'max:255'],
            'vat' => ['required', 'string', 'max:255'],
            'id_lender' => ['required', 'string', 'max:255'],
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
                    'dob' => $request['dob'],
                    'address' => $request['address'],
                    'vat' => $request['vat'],
                    'id_lender' => $request['id_lender'],
                    'password' => Hash::make($request['password']),
                    'status'=>0 
                ]);
           return redirect('admin/lender')->with('success','Lender Record Updated Succesffully');
        } 
    }

   
    public function delete(Request $request, $id)
    {
       $idd= base64_decode($id);
       Lender::where('id',$idd)->delete();
       return redirect('admin/lender')->with('success','Lender Delete Successfully');
    }
 ### here  is code starting for changing ths ststus
    public function status(Request $request, $id)
    {
       $idd= base64_decode($id);
       $lenderdata=Lender::where('id',$idd)->first();
       if($lenderdata->status=='0')
       {
            $status=1;
       }
       else
       {
         $status=0;
       }
       Lender::where('id',$idd)
                    ->update(['status'=>$status]);
      return redirect('admin/lender')->with('success','Record Updated Succesffully');
    }

    public function basic_email() {
      $data = array('name'=>"Virat Gandhi");
    
    $value=  \Mail::send(['text'=>'emails.lender_reg'], $data, function($message) {
         $message->to('std.chandan@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('info@nirvanaflavours.com','Virat Gandhi');
      });
    print_r($value);
   }

}
