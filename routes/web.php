<?php

Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});


Route::get('/logout','AdminController@logout');

// admin login
Route::post('/adminlogin','AdminController@admin_login');
Route::get('/admin_dashboard','AdminController@admin_dashboard');


// student login
Route::post('/studentlogin','StudentController@student_login');
Route::get('/student_dashboard','StudentController@student_dashboard');
Route::get('/student_profile','StudentController@student_profile');
Route::get('/student_setting','StudentController@student_setting');
Route::get('/student_logout','StudentController@student_logout');
Route::post('/update_student_info','StudentController@update_student_info');


// view profile
Route::get('/viewprofile','AdminController@view_profile');

// setting
Route::get('/setting','AdminController@setting');

// student
Route::get('/addstudent','AddstudentController@add_student');
Route::post('/save_student','AddstudentController@save_student');
Route::get('/allstudent','AllstudentController@all_student');
Route::get('/delete_student/{student_id}','AllstudentController@delete_student');
Route::get('/view_student/{student_id}','AllstudentController@view_student');
Route::get('/edit_student/{student_id}','AllstudentController@edit_student');
Route::post('/update_student/{student_id}','AllstudentController@update_student');

// tution fee
Route::get('/tutionfee','TutionfeeController@tution_fee');

// course
Route::get('/cse','CSEController@cse');

Route::get('/bba','BBAController@bba');

Route::get('/ece','ECEController@ece');

Route::get('/eee','EEEController@eee');

Route::get('/mba','MBAController@mba');

// teacher
Route::get('/addteacher','AddteacherController@add_teacher');
Route::post('/save_teacher','AddteacherController@save_teacher');
Route::get('/allteacher','AllteacherController@all_teacher');







