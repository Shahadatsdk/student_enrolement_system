<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class AddstudentController extends Controller
{
   
	// Add Student Code

	public function add_student(){
		return view('admin.addstudent');
	}


	// Save Student Code

	public function save_student(Request $request){

		$data = array();

		$data['student_name'] = $request->student_name;

		$data['student_roll'] = $request->student_roll;

		$data['student_fathersname'] = $request->student_fathersname;

		$data['student_mothersname'] = $request->student_mothersname;

		$data['student_email'] = $request->student_email;

		$data['student_phone'] = $request->student_phone;

		$data['student_address'] = $request->student_address;

		$data['student_password'] = $request->student_password;

		$data['student_department'] = $request->student_department;

		$data['student_admissionyear'] = $request->student_admissionyear;

		$image = $request->file('student_image');

		if($image){
			$image_name = str_random(20);
			$ext = strtolower($image->getClientOriginalExtension());
			$image_full_name = $image_name.'.'.$ext;
			$upload_path = 'image/';
			$image_url = $upload_path.$image_full_name;
			$success = $image->move($upload_path,$image_full_name);
			if($success){
				$data['student_image'] = $image_url;
				DB::table('student_tbl')->insert($data);
				Session::put('message','Data Insert Successfully');
				return Redirect::to('/addstudent');
			}
		}

		$data['image'] = $image_url;

		DB::table('student_tbl')->insert($data);

		Session::put('message','Data Insert Successfully');

		return Redirect::to('/addstudent');

	}
}
