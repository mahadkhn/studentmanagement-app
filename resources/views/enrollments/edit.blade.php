@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
        

        <label>Ennroll no</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{$enrollments->enroll_no}}"></br>
        
        <label>batch</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{$enrollments->batch_id}}"></br>
       
        <label>Student_id</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control" value="{{$enrollments->student_id}}"></br>
        
        <label>Join_date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control" value="{{$enrollments->join_date}}"></br>
        
        <label>fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollments->fee}}"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop