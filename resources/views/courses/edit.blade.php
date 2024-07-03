@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">course edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('courses/' .$Courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Courses->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$Courses->name}}" class="form-control"></br>
        <label>Syllabus</label></br>
        <input type="text" name="address" id="address" value="{{$Courses->syllabus}}" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$Courses->duration()}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop