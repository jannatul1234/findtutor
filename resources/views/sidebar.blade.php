  <div class="list-group list-group-flush sidemenu" >
         	<a href="{{url('home/')}}" class="list-group-item"><i class="fa fa-user"></i> Profile</a>
         	<a href="{{url('editfind/')}}" class="list-group-item"><i class="fa fa-edit"></i> Edit Info</a>
         	<a href="{{url('history/')}}" class="list-group-item"><i class="fa fa-edit"></i> History</a>
         	<a href="{{url('student_cngpass/')}}" class="list-group-item"><i class="fa fa-pencil"></i> Change Password</a>
         	
         	 <a class="dropdown-item text-primary"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="  fa fa-power-off"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
         		@csrf

         	</form>

         </div>