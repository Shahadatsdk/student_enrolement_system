@extends('layout')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Teacher</h2>

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
                  <th>Tr Id</th>
                  <th>Tr Name</th>
                  <th>Tr Phone</th>
                  <th>Tr Address</th>
                  <th>Tr Image</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>

            @foreach($allteacher_info as $teacher_info)  
            	
              <tr>
                  <td>{{$teacher_info->teacher_id}}</td>
                  <td>{{$teacher_info->teacher_name}}</td>
                  <td>{{$teacher_info->teacher_phone}}</td>
                  <td>{{$teacher_info->teacher_address}}</td>
                  <td><img src="{{URL::to($teacher_info->teacher_image)}}" height="80" width="80" style="border-radius: 500%;"></td>
                  <td>
                   <a href="{{URL::to('/view_teacher/'.$teacher_info->teacher_id)}}"> <button class="btn btn-outline-primary">View</button> </a>
                   <a href="{{URL::to('/edit_teacher/'.$teacher_info->teacher_id)}}"> <button class="btn btn-outline-warning">Edit</button> </a>
                   <a href="{{URL::to('/delete_teacher/'.$teacher_info->teacher_id)}}"> <button class="btn btn-outline-danger">Delete</button> </a>
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