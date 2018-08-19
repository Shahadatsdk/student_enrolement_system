<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // all teacher

    public function all_teacher(){

    	return view('admin.allteacher');

    }
}
