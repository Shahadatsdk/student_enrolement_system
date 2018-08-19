@extends('layout')
@section('content')
   <div class="container">
  <!-- <h1 class="page-title">All Student</h1> -->
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">CSE Student</h2>
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>St Id</th>
                  <th>St Name</th>
<!--                   <th>St Roll</th>
                  <th>St Father's Name</th> -->
                  <!-- <th>St Mother's Name</th> -->
                  <!-- <th>St Email</th> -->
                  <th>St Phone</th>
                  <th>St Image</th>
                  <th>St Address</th>
                  <!-- <th>St Password</th> -->
                  <th>St Department</th>
                  <!-- <th>St Admissionyear</th> -->
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>

            @foreach($csestudent_info as $student_info)  
            	
              <tr>
                  <td>{{$student_info->student_id}}</td>
                  <td>{{$student_info->student_name}}</td>
<!--                   <td>{{$student_info->student_roll}}</td>
                  <td>{{$student_info->student_fathersname}}</td>
                  <td>{{$student_info->student_mothersname}}</td>
                  <td>{{$student_info->student_email}}</td> -->
                  <td>{{$student_info->student_phone}}</td>
                  <td><img src="{{URL::to($student_info->student_image)}}" height="80" width="100" style="border-radius: 500%;"></td>
                  <td>{{$student_info->student_address}}</td>
                  <!-- <td>{{$student_info->student_password}}</td> -->
                  <!-- <td>{{$student_info->student_department}}</td> -->
                  <td>
                  	@if($student_info->student_department == 1)
                  	<span class="label label-success">{{'CSE'}}</span>
                  	@elseif($student_info->student_department == 2)
                  	<span class="label label-success">{{'BBA'}}</span>
                  	@elseif($student_info->student_department == 3)
                  	<span class="label label-success">{{'ECE'}}</span>
                  	@elseif($student_info->student_department == 4)
                  	<span class="label label-success">{{'EEE'}}</span>
                  	@elseif($student_info->student_department == 5)
                  	<span class="label label-success">{{'MBA'}}</span>
                  	@esle
                  	<span class="label label-success">{{'Not Defined'}}</span>
                  	@endif
                  </td>
                  <!-- <td>{{$student_info->student_admissionyear}}</td> -->
                  <td>
                   <a href="{{URL::to('/view_student/'.$student_info->student_id)}}"> <button class="btn btn-outline-primary">View</button> </a>
                   <a href="{{URL::to('/edit_student/'.$student_info->student_id)}}"> <button class="btn btn-outline-warning">Edit</button> </a>
                   <a href="{{URL::to('/delete_student/'.$student_info->student_id)}}"> <button class="btn btn-outline-danger">Delete</button> </a>
                  </td>
              </tr>

             @endforeach 
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection