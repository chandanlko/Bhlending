<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $users = User::select("*")
                        ->where("is_admin", "=", null)
                        ->get();
       
        return view('admin.adminHome',['Users'=>$users]);
    }
    public function Useradd()
    {
       return view('admin.userform',['title'=>'Add New User']);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect('user/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {

             User::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                ]);
                return redirect('admin/home')->with('success','New User Created Successfully');
        }
    }

    public function delete(Request $request, $id)
    {
       $idd= base64_decode($id);
       User::where('id',$idd)->delete();
       return redirect('admin/home')->with('success','User Delete Successfully');
    }
    public function edit(Request $request, $id)
    {
        $idd= base64_decode($id);
        $user=User::find($idd);
         return view('admin.userform',['title'=>'Edit User','user'=>$user]);
    }
    public function saveedited(Request $request)
    {
      echo $query="select * from users where id !='".$request['userid']."' and email='".$request['email']."'";
       $result=DB::select($query);
       //print_r($result); die;
       if(!empty($result)){
        $emailvalid= ['required', 'string', 'email', 'max:255', 'unique:users'];
       }
       else
       {
            $emailvalid =  ['required', 'string', 'email', 'max:255'];
       }
       $validator = Validator::make($request->all(), [
           'name' => ['required', 'string', 'max:255'],
            'email' => $emailvalid,
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return redirect('user/edit/'.base64_encode($request['userid']))
                        ->withErrors($validator)
                        ->withInput();
        }
        else
        {

             User::where('id',$request['userid'])
                    ->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                ]);
                return redirect('admin/home')->with('success','User Updated Succesfully');
        }  
    }
    
}