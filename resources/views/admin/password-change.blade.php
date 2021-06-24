@extends('admin.master')
@section('homeContent')


<div class="alert alert-info text-center" style="margin-left: 100px; margin-top: 50px;" role="alert">
@if( session()->has('success'))
{{ session('success')}}

@endif
</div>




<div class="card text-center " style="width: 500px; margin-left: 500px; margin-top: 50px;">
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










@endsection