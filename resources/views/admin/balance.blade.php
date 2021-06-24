@extends('admin.master')
@section('homeContent')


<div class="alert alert-info text-center" style="margin-left: 100px; margin-top: 50px;" role="alert">
@if( session()->has('success'))
{{ session('success')}}

@endif
</div>
<form  action="{{'balancesheet'}} " method="post" class="" style="margin-left: 300px; margin-top: 70px; width: 500px;" >
	@csrf
	<div class="alert alert-primary offset-md-5" role="alert">
 Balnace <h3>BDT.{{$balance->balance}}</h3>
</div>
 
<div class="form-group offset-md-5">
    <label for="formGroupExampleInput">Add Balance</label>
    <input type="text" name="balance" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
<a href=""><button type="submit" class="btn btn-primary offset-md-5">Add</button></a>

</form>

 












@endsection