<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    ###loading the list of lenders
    public function index()
    {
        $users = Role::select("*")->get();
        return view('admin.role',['Users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    ###loading from to create new lenders
    public function create()
    {
       return view('admin.roleform',['title'=>'Add New Role']);
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
            'name' =>   ['required', 'string','max:255', 'unique:roles'],
           
        ]);
        if ($validator->fails()) {
            return redirect('role/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {

             Role::create([
                    'name' => $request['name'],
                    
                ]);
                return redirect('admin/role')->with('success','New Role Created Successfully');
        }
    }

  
        ### particular lender can be manipulat/ the record
         public function edit(Request $request, $id)
            {
                $idd= base64_decode($id);
                $user=Role::find($idd);
                 return view('admin.roleform',['title'=>'Edit Role','user'=>$user]);
            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lender  $lender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $Role)
    {
       $query="select * from roles where id !='".$request['userid']."' and name='".$request['name']."'";
       $result=DB::select($query);
       if(!empty($result)){
        $validrole= ['required', 'string', 'max:255', 'unique:roles'];
       }
       else
       {
            $validrole =  ['required', 'string', 'max:255'];
       }
      $validator = Validator::make($request->all(), [
                       'name' =>   $validrole
                        ]);
        if ($validator->fails()) {
            return redirect('role/edit/'.base64_encode($request['userid']))
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {
                    Role::where('id',$request['userid'])
                    ->update([
                               'name' => $request['name'],
                 ]);
           return redirect('admin/role')->with('success','Role Updated Succesffully');
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
       Role::where('id',$idd)->delete();
       return redirect('admin/role')->with('success','Role Delete Successfully');
    }
}
