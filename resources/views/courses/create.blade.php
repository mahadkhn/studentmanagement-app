@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Courses Page</div>
  <div class="card-body">
      
      <form action="{{ url('courses') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>syllabus</label></br>
        <input type="text" name="sylabus" id="syllabus" class="form-control"></br>
        <label>Durration</label></br>
        <input type="text" name="Duration" id="duration" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop