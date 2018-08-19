@extends('student_layout')
@section('content')
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">All Student</h2>
          @php 
          $student = DB::table('student_tbl')->count('student_id');
          @endphp

           <p style="font-family: cursive; font-size: 16px; font-weight: bold; text-align: center;">{{$student}}</p>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-1" class="card-float-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">All Teacher</h2>

          @php 
          $teacher = DB::table('teacher_tbl')->count('teacher_id');
          @endphp

           <p style="font-family: cursive; font-size: 16px; font-weight: bold; text-align: center;">{{$teacher}}</p>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-2" class="card-float-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Tution Fee</h2>
           <p style="font-family: cursive; font-size: 16px; font-weight: bold; text-align: center;">Monthly : 2500 tk</p>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-3" class="card-float-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3 grid-margin">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Result</h2>
           <p style="font-family: cursive; font-size: 16px; font-weight: bold; text-align: center;">12</p>
        </div>
        <div class="dashboard-chart-card-container">
          <div id="dashboard-card-chart-4" class="card-float-chart"></div>
        </div>
      </div>
    </div>

    <div class="col-md-4 grid-margin d-flex align-items-stretch">
      <div class="row">
        <div class="col-12 grid-margin d-flex align-items-stretch">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-12 mb-3">
              <div class="social-panel bg-facebook"><p class="mb-0">CSE</p></div>
            </div>
            <div class="col-12 col-sm-6 col-md-12 mb-3">
              <div class="social-panel bg-twitter"><p class="mb-0">BBA</p></div>
            </div>
            <div class="col-12 col-sm-6 col-md-12 mb-3">
              <div class="social-panel bg-google"><p class="mb-0">ECE</p></div>
            </div>
            <div class="col-12 col-sm-6 col-md-12">
              <div class="social-panel bg-linkedin"><p class="mb-0">EEE</p></div>
            </div>
            <div class="col-12 col-sm-6 col-md-12 mb-3">
              <div class="social-panel bg-facebook"><p class="mb-0">MBA</p></div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection