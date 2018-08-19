@extends('layout')
@section('content')
    <div class="content-wrapper">
        <!-- <h1 class="page-title">Add Student</h1> -->
            <div class="row">
              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Student</h2>

                        <p class="alert-success" style="font-size:20px; color: green;">
            							<?php 

            							$message = Session::get('message');

            							if($message){
            								echo $message;
            								Session::put('message',null);
            							}

            							?>
            						</p>

                          <form class="forms-sample" method="post" action="{{URL::to('/update_student',$student_info->student_id)}}" enctype="multipart/form-data">
                          	{{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" placeholder="Student Name" value="{{$student_info->student_name}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" placeholder="Student Roll" value="{{$student_info->student_roll}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Father's Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" placeholder="Student Father's Name" value="{{$student_info->student_fathersname}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" placeholder="Student Mother's Name" value="{{$student_info->student_mothersname}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" placeholder="Student Email" value="{{$student_info->student_email}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" placeholder="Student Phone" value="{{$student_info->student_phone}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" placeholder="Student Address" value="{{$student_info->student_address}}">
                              </div>                         
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection