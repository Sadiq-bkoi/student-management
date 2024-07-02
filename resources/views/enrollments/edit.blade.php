@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batch edit Page</div>
  <div class="card-body">
      
            {{--enrollments name, enrollment_no, student_id, batch_id, join_date, fee --}}
      <form action="{{ url('enrollments/' .$Enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Enrollments->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$Enrollments->name}}" class="form-control"></br>
        <label>Enrollment No</label></br>
        <input type="text" name="enrollment_no" id="enrollment_no" value="{{$Enrollments->enrollment_no}}" class="form-control"></br>
        <label>Student ID</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$Enrollments->student_id}}" class="form-control"></br>
        <label>Batch ID</label></br>
        <input type="text" name="batch_id" id="batch_id" value="{{$Enrollments->batch_id}}" class="form-control"></br>
        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" value="{{$Enrollments->join_date}}" class="form-control"></br>
        <label>Enrollment Fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$Enrollments->fee}}" class="form-control"></br>
        
        
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop