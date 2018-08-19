<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use Session;

Session_start();

class AdminController extends Controller
{
    
	// Admin Dashboard

	public function admin_dashboard(){
		return view('admin.dashboard');
	}


	// view profile

	public function view_profile(){
		return view('admin.view');
	}


	// Setting

	public function setting(){
		return view('admin.setting');
	}


	// logout part

	public function logout(){

		Session::put('admin_name',null);
		Session::put('admin_id',null);

		return Redirect::to('/backend');

	}

	// Login dashboard for admin

	public function admin_login(Request $request){

		$email = $request->admin_email;
		$password = $request->admin_password;

		$result = DB::table('admin_tbl')->where('admin_email',$email)->where('admin_password',$password)->first();

		if($result){

			Session::put('admin_email',$result->admin_email);
			Session::put('admin_id',$result->admin_id);
			return Redirect::to('/admin_dashboard');

		}else{

			Session::put('exception','Email or Password Invalid');
			return Redirect::to('/backend');

		}
	}


}
