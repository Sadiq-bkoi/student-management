@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Enrollments Page</div>
  <div class="card-body">
    {{--enrollments name, enrollment_no, student_id, batch_id, join_date, fee --}}
                                        
    {{-- {{dd($course)}}; --}}
    <div class="card-body">
        <h5 class="card-title">Name : {{ $Enrollments->name }}</h5>
        <p class="card-text">Enrollment No : {{ $Enrollments->enrollment_no }}</p>
        <p class="card-text">Student ID : {{ $Enrollments->student_id }}</p>
        <p class="card-text">Batch ID : {{ $Enrollments->batch_id }}</p>
        <p class="card-text">Join Date : {{ $Enrollments->join_date }}</p>
        <p class="card-text">Enrollment Fee : {{ $Enrollments->fee }}</p>
        
    </div>
       
    </hr>
  
  </div>
@endsection