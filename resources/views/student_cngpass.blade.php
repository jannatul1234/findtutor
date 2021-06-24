@extends('fontend.master')
@section('homeContent')



<div class="row">
  
<div class="col-md-2 " style="margin-top: 100px;">
  
@include('sidebar')

</div>

<div class="col-md-10">
  


<div class="alert alert-info text-center" style="margin-left: px; margin-top: 100px;" role="alert">
@if( session()->has('success'))
{{ session('success')}}

@endif
</div>




<div class="card text-center " style="width: 500px; margin-left: 200px; ">
  <div class="card-header">
    Change Password
  </div>
  <div class="card-body">
    <form action="{{url('change_password/')}}" method="post">
   @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder=" Confirm Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Change</button>
</form>    
  </div>
  
</div>






</div>

</div>



















@endsection