@extends('layout')
@section('content')
 
<div class="card">
    <div class="card-header">Enrollment Page</div>
    <div class="card-body">
        <form action="{{ url('enrollments') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Enrollment No</label></br>
            <input type="text" name="enrollment_no" id="enrollment_no" class="form-control"></br>
            <label>Student ID</label></br>
            <input type="text" name="student_id" id="student_id" class="form-control"></br>
            <label>Batch ID</label></br>
            <input type="text" name="batch_id" id="batch_id" class="form-control"></br>
            <label>Join Date</label></br>
            <input type="text" name="join_date" id="join_date" class="form-control"></br>
            <label>Enrollment Fee</label></br>
            <input type="text" name="fee" id="fee" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>
 
@stop