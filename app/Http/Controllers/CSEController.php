<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class CSEController extends Controller
{
   // CSE Code

	public function cse(){
		
		$csestudent_info = DB::table('student_tbl')->where(['student_department'=>1])->get();

		$managestudent_info = view('admin.cse')->with('csestudent_info',$csestudent_info);

		return view('layout')->with('cse',$managestudent_info);
	}

}
