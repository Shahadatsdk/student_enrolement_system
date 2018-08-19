<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class BBAController extends Controller
{
    // BBA Code

	public function bba(){

		$bbastudent_info = DB::table('student_tbl')->where(['student_department'=>2])->get();

		$managestudent_info = view('admin.bba')->with('bbastudent_info',$bbastudent_info);

		return view('layout')->with('bba',$managestudent_info);
	}
}
