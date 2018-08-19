<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class MBAController extends Controller
{
    
	// MBA Code

	public function mba(){

		$mbastudent_info = DB::table('student_tbl')->where(['student_department'=>5])->get();

		$managestudent_info = view('admin.mba')->with('mbastudent_info',$mbastudent_info);

		return view('layout')->with('mba',$managestudent_info);
	}
}
