
@extends('fontend.master')
@section('homeContent')


<div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  Your Sarching Result!
</div>
	
@if( session()->has('success'))
{{ session('success')}}

@endif




<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


@foreach($result as $result)
<div >


  <tr>
      
      <td>{{$result->name}}</td>
      <td>{{$result->subject}}</td>
      <td>{{$result->address}}</td>
      <td>
<form action="{{url('book')}}" method="post" >
	@csrf
	<input type="hidden" name="teacher_id" value="{{$result->id}}">
<input type="hidden" name="student_id" value="{{Auth::user()->id}}">


@php
$checkbook=\App\Models\Book::where('teacher_id',$result->id)->where('student_id',Auth::user()->id)->first();
@endphp
@if($checkbook)
<button type="button" class="btn btn-success"> BOOKED</button>
@else
<button type="submit" class="btn btn-info"> BOOK</button>
@endif











</form></td>
    </tr>




	

</div>




@endforeach




  
    
  </tbody>
</table>













@endsection