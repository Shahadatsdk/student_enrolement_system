<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class AllstudentController extends Controller
{
    	// All Student Code

	public function all_student(){

		// return view('admin.allstudent');

		$allstudent_info = DB::table('student_tbl')->get();

		$managestudent_info = view('admin.allstudent')->with('allstudent_info',$allstudent_info);

		return view('layout')->with('allstudent',$managestudent_info);
	}


		// delete student code

	public function delete_student($student_id){
		
		DB::table('student_tbl')->where('student_id',$student_id)->delete();

		Session::put('message','Student Deleted Successfully');

		return Redirect::to('/allstudent');
	}



	// view student 

	public function view_student($student_id){

		// return view('admin.studentview');

		$student_info = DB::table('student_tbl')->select('*')->where('student_id',$student_id)->first();

		$managestudent_info = view('admin.studentview')->with('student_info',$student_info);

		return view('layout')->with('studentview',$managestudent_info);

		// echo "<pre>";
		// print_r($student_info);
		// echo "</pre>";

	}


	// edit student


	public function edit_student($student_id){

		$student_info = DB::table('student_tbl')->select('*')->where('student_id',$student_id)->first();

		$managestudent_info = view('admin.studentedit')->with('student_info',$student_info);

		return view('layout')->with('studentedit',$managestudent_info);

	}



	// update student

	public function update_student(Request $request,$student_id){

		$data = array();

		$data['student_name'] = $request->student_name;

		$data['student_roll'] = $request->student_roll;

		$data['student_fathersname'] = $request->student_fathersname;

		$data['student_mothersname'] = $request->student_mothersname;

		$data['student_email'] = $request->student_email;

		$data['student_phone'] = $request->student_phone;

		$data['student_address'] = $request->student_address;

		DB::table('student_tbl')->where('student_id',$student_id)->update($data);

		Session::put('message','Information Updated Successfully');

		return Redirect::to('/allstudent');

	}

}
