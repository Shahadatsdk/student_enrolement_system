<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class StudentController extends Controller
{
    
	// Admin Dashboard

	public function student_dashboard(){
		return view('student.dashboard');
	}


	// Login dashboard for student

	public function student_login(Request $request){

		$email = $request->student_email;
		$password = $request->student_password;

		$result = DB::table('student_tbl')->where('student_email',$email)->where('student_password',$password)->first();

		if($result){

			Session::put('student_email',$result->student_email);
			Session::put('student_id',$result->student_id);
			return Redirect::to('/student_dashboard');

		}else{

			Session::put('exception','Email or Password Invalid');
			return Redirect::to('/');

		}
	}



	// student profile

	public function student_profile(){

		$student_id = Session::get('student_id');

		$student_info = DB::table('student_tbl')->where('student_id',$student_id)->first();

		$managestudent_info = view('student.studentprofile')->with('student_info',$student_info);

		return view('student_layout')->with('studentprofile',$managestudent_info);

		// return view('student.studentprofile');
		// echo "ok";

	}


		// Setting

	public function student_setting(){

		$student_id = Session::get('student_id');

		$student_info = DB::table('student_tbl')->select('*')->where('student_id',$student_id)->first();

		$managestudent_info = view('student.setting')->with('student_info',$student_info);

		return view('student_layout')->with('setting',$managestudent_info);
	}


	// logout part

	public function student_logout(){

		Session::put('student_name',null);
		Session::put('student_id',null);

		return Redirect::to('/');

	}


	// update student

	public function update_student_info(Request $request){

		$student_id = Session::get('student_id');

		$data = array();

		$data['student_phone'] = $request->student_phone;

		$data['student_address'] = $request->student_address;

		$data['student_password'] = $request->student_password;

		DB::table('student_tbl')->where('student_id',$student_id)->update($data);

		Session::put('message','Information Updated Successfully');

		return Redirect::to('/student_profile');

	}

}
