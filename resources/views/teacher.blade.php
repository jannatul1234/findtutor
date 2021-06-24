@extends('fontend.master')
@section('homeContent')



<div >
    

<div class="row mt-2" >

    <div class="col-md-3 " style="margin-top: 70px;">
        @include('teacher_sidebar')

    </div>
    
<div class="col-md-8" style="margin-top: 70px;">
    <div class="container " >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<span >Name:  {{Auth::user()->name}}</span>
<br>
<br>
 <span >Subject:  {{Auth::user()->subject}}</span>
<br>  
<br>     
<span >Email:  {{Auth::user()->email}}</span>
<br>     
<br>  
<span >Phone:  {{Auth::user()->phone}}</span>
<br>    
<br>   
<span >Address:  {{Auth::user()->address}}</span>
<br>   
<br>    
<span >City:  {{Auth::user()->city}}</span>
<br>  

                    
                </div>
            </div>
        </div>
    </div>
</div>







</div>




</div>




</div>

@endsection

