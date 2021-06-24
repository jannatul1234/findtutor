 <div class="main-w3pvt mian-content-wthree text-center" id="home">
        <div class="container">
            <div class="style-banner mx-auto">
                <h3 class="text-wh font-weight-bold">Welcome to <span>Private Tutor</span> <br>Best for Education</h3>
                <p class="mt-3 text-li" id="join">Join Private Tutor Now</p>
                <!-- form -->
                <div class="home-form-w3ls mt-5">
                    <form action="{{url('search')}}" method="get">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="area" placeholder="Area"
                                        required="">
                                </div>
                                
                            </div>
                            <div class="col-lg-6">
                                
                                <div class="form-group">
                                  
                                        
    <select  id="exampleFormControlSelect1" class="form-control  form-control-lg"   name="subject"required="">
      <option value="">Subject</option>

@foreach($subject as $subject)
<option value="{{$subject->subject}}">{{$subject->subject}}</option>
@endforeach

     
    </select>
  </div>



                                    
                                </div>
                            </div>
                        </div>
                        @if(Auth::check())
                        <button type="submit" class="btn_apt btn">Search</button>
                        @else
                        <button type="button" class="btn_apt btn">Search</button>
                        @endif

                        
                    </form>
                </div>
                <!-- //form -->
            </div>
        </div>
    </div>