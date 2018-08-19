<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutionfeeController extends Controller
{
   
	// Tution Fee Code

	public function tution_fee(){
		return view('admin.tutionfee');
	}
}
