@extends('layout')

@php 

function convert_department($value){
  
  $values = [

    1=>'CSE',
    2=>'BBA',
    3=>'ECE',
    4=>'EEE',
    5=>'MBA',

  ];

  return $values[$value];

}

@endphp

@section('content')
  <div class="container">

      <p class="alert-success" style="font-size:20px; color: green;">
        <?php 

        $message = Session::get('message');

        if($message){
          echo $message;
          Session::put('message',null);
        }

        ?>
      </p>

                        
    <h1 class="page-title">User Profile</h1>
    <div class="row user-profile">
      <div class="col-lg-4 side-left">
        <div class="card mb-4">
          <div class="card-body avatar">
            <h2 class="card-title">Info</h2>
            <img src="{{URL::to($student_info->student_image)}}" height="80" width="100" style="border-radius: 500%;">
            <p class="name">{{$student_info->student_name}}</p>
            <p class="designation">{{$student_info->student_roll}}</p>
            <a class="email" href="#">{{$student_info->student_email}}</a>
            <a class="number" href="#">{{$student_info->student_phone}}</a>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body overview">
            <ul class="achivements">
              <li><p>34</p><p>Projects</p></li>
              <li><p>23</p><p>Task</p></li>
              <li><p>29</p><p>Completed</p></li>
            </ul>
            <div class="wrapper about-user">
              <h2 class="card-title mt-4 mb-3">About {{$student_info->student_name}}</h2>
              <p>Total Information of {{$student_info->student_name}}</p>
            </div>
            <div class="info-links">
              <a class="website">
                <i class="icon-globe icon">Father's Name : </i>
                <span style="font-family: verdana; font-size: 15px;">{{$student_info->student_fathersname}}</span>
              </a>
               <a class="website">
                <i class="icon-globe icon">Mother's Name : </i>
                <span style="font-family: verdana; font-size: 15px;">{{$student_info->student_mothersname}}</span>
              </a>
              <a class="website">
                <i class="icon-globe icon">Address: </i>
                <span style="font-family: verdana; font-size: 15px;">{{$student_info->student_address}}</span>
              </a>
              <a class="website">
                <i class="icon-globe icon">Department: </i>
                <span style="font-family: verdana; font-size: 15px;">{{convert_department($student_info->student_department)}}</span>
              </a>
              <a class="website">
                <i class="icon-globe icon">Admission Year: </i>
                <span style="font-family: verdana; font-size: 15px;">{{$student_info->student_admissionyear}}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection