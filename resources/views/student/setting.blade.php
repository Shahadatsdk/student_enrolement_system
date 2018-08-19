@extends('layout')
@section('content')
    <div class="content-wrapper">
        <!-- <h1 class="page-title">Add Student</h1> -->
            <div class="row">
              <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Your Profile</h2>   
                          <form class="forms-sample" method="post" action="{{URL::to('/update_student_info')}}">
                          	{{ csrf_field() }}
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" value="{{$student_info->student_phone}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" value="{{$student_info->student_address}}">
                              </div>                         
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="text" class="form-control p-input" name="student_password" value="{{$student_info->student_password}}">
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection