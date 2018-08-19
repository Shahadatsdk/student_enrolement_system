<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class AllteacherController extends Controller
{
    	// All Student Code

	public function all_teacher(){

		$allteacher_info = DB::table('teacher_tbl')->get();

		$manageteacher_info = view('admin.allteacher')->with('allteacher_info',$allteacher_info);

		return view('layout')->with('allteacher',$manageteacher_info);
	}}
