@extends('fontend.master')
@section('homeContent')



<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card mt-5 ">
                <div class="row offset-md-5">
                   
                   <a href="{{url('/register')}}"><button type="button" class="btn btn-primary ">Student</button></a> 
                <a href="{{url('/teacher')}}"><button type="button" class="btn btn-success ml-3">Teacher</button></a> 


                </div>
                
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body mt-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-dark text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-dark text-md-right">{{ __('Class') }}</label>

                            <div class="col-md-6">
                                <input id="class" type="text" class="form-control  @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}"  autocomplete="class1" autofocus>

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



<input type="hidden" name="subject" value="NULL">


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-dark text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

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
                                <input id="Phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone">

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
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address">

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
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"  autocomplete="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



<div class="form-group row">
                            <label for="parent_name" class="col-md-4 col-form-label text-dark text-md-right">{{ __('Parent name') }}</label>

                            <div class="col-md-6">
                                <input id="parent_name" type="text" class="form-control @error('parent_name') is-invalid @enderror" name="parent_name" value="{{ old('parent_name') }}"  autocomplete="parent_name">

                                @error('parent_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-dark text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-dark text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>
<input type="hidden" name="type" value="student">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button> <a class="ml-2" href="{{url('/login')}}">Already have an account?</a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
