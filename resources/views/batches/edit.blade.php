@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batch edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('batches/' .$Batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Batches->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$Batches->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="course_id" id="course_id" value="{{$Batches->course_id}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="start_date" id="start_date" value="{{$Batches->start_date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop