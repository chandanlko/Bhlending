<?php
//helper is creating to use for global function that i can call easliy this from ant anywhere
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

if(!function_exists('getlenderdata'))
{
	function getlenderdata($id)
	{
		$data=DB::table('lenders')->where('id',$id)->first();
		if($data)
		{
			return $data;
		}
		else
		{
			return false;
		}

	}
			
}

?>