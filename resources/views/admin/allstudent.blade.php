@extends('layout')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Student</h2>

       <p class="alert-success" style="font-size:20px; color: green;">
        <?php 

        $message = Session::get('message');

        if($message){
          echo $message;
          Session::put('message',null);
        }

        ?>
        </p>

      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>St Id</th>
                  <th>St Name</th>
                  <th>St Phone</th>
                  <th>St Image</th>
                  <th>St Address</th>
                  <th>St Department</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>

            @foreach($allstudent_info as $student_info)  
            	
              <tr>
                  <td>{{$student_info->student_id}}</td>
                  <td>{{$student_info->student_name}}</td>
                  <td>{{$student_info->student_phone}}</td>
                  <td><img src="{{URL::to($student_info->student_image)}}" height="80" width="80" style="border-radius: 500%;"></td>
                  <td>{{$student_info->student_address}}</td>
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