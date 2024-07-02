@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batches Page</div>
  <div class="card-body">
   
    {{-- {{dd($course)}}; --}}
    <div class="card-body">
        <h5 class="card-title">Name : {{ $Batches->name }}</h5>
        <p class="card-text">Course ID : {{ $Batches->course_id }}</p>
        <p class="card-text">Start Date : {{ $Batches->start_date }}</p>
    </div>
       
    </hr>
  
  </div>
@endsection