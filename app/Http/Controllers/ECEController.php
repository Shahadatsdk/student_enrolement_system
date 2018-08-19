<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class ECEController extends Controller
{
    // ECE Code

	public function ece(){

		$ecestudent_info = DB::table('student_tbl')->where(['student_department'=>3])->get();

		$managestudent_info = view('admin.ece')->with('ecestudent_info',$ecestudent_info);

		return view('layout')->with('ece',$managestudent_info);
	}

}
