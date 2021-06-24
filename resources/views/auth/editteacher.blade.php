@extends('fontend.master')
@section('homeContent')

<div>
    
<div class="row ">

    <div class="col-md-2 " style="margin-top: 70px;">
 @include('teacher_sidebar')




        
</div>
    
<div class="col-md-10">
    
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card mt-5 ">
                <div class="row offset-md-5">

                   
                
<div class="alert alert-info text-center" style="margin-left: 50px; margin-top: 50px;" role="alert">
@if( session()->has('success'))
{{ session('success')}}

@endif
</div>

                </div>
                
                <div class="card-header">{{ __('Update Info') }}</div>

                <div class="card-body mt-5">
                    <form method="POST" action="{{ url('edit/') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-dark text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<input type="hidden" name="class" value="NULL">
<div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-dark text-md-right">{{ __('Subject') }}</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control  @error('subject') is-invalid @enderror" name="subject" value="{{ Auth::user()->subject }}" required autocomplete="subject" autofocus>

                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-dark text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="Phone" class="col-md-4 col-form-label text-dark text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="Phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ Auth::user()->phone }}"  autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Address" class="col-md-4 col-form-label text-dark text-md-right">{{ __(' Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ Auth::user()->address }}"  autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 

<div class="form-group row">
                            <label for="Address" class="col-md-4 col-form-label text-dark text-md-right">{{ __(' City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ Auth::user()->city }}"  autocomplete="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


<input type="hidden" name="parent_name" value="NULL">


                        
                      
<input type="hidden" name="type" value="student">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>



    </div>






</div>

@endsection
