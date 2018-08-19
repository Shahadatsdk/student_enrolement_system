<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class AddteacherController extends Controller
{

    // add teacher
   public function add_teacher(){

		return view('admin.addteacher');

	}


	// save teacher
	public function save_teacher(Request $request){

		$data = array();

		$data['teacher_name'] = $request->teacher_name;

		$data['teacher_phone'] = $request->teacher_phone;

		$data['teacher_address'] = $request->teacher_address;

		$image = $request->file('teacher_image');

		if($image){
			$image_name = str_random(20);
			$ext = strtolower($image->getClientOriginalExtension());
			$image_full_name = $image_name.'.'.$ext;
			$upload_path = 'image/';
			$image_url = $upload_path.$image_full_name;
			$success = $image->move($upload_path,$image_full_name);
			if($success){
				$data['teacher_image'] = $image_url;
				DB::table('teacher_tbl')->insert($data);
				Session::put('message','Data Insert Successfully');
				return Redirect::to('/addteacher');
			}
		}

		$data['image'] = $image_url;

		DB::table('teacher_tbl')->insert($data);

		Session::put('message','Data Insert Successfully');

		return Redirect::to('/addteacher');

	}
}
