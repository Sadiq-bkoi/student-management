@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">courses Page</div>
  <div class="card-body">
   
    {{-- {{dd($course)}}; --}}
        <div class="card-body">
        <h5 class="card-title">Name : {{ $Courses->name }}</h5>
        <p class="card-text">Address : {{ $Courses->syllabus }}</p>
        <p class="card-text">Mobile : {{ $Courses->duration() }}</p>
  </div>
       
    </hr>
  
  </div>
@endsection