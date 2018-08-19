<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class EEEController extends Controller
{
    	
	// EEE Code

	public function eee(){

		$eeestudent_info = DB::table('student_tbl')->where(['student_department'=>4])->get();

		$managestudent_info = view('admin.eee')->with('eeestudent_info',$eeestudent_info);

		return view('layout')->with('eee',$managestudent_info);

	}

}
