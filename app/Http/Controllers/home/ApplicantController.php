<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ApplicantController extends Controller
{
    

	
    public function index()
    {
        $id= Session::get('userlogin_id');
        if(empty($id))
        {
            redirect('front')->send();
        }
        else
        {
            return view('home.applicant.dashboard',['applicant_id'=>$id]);
        }
    	
    }
}
