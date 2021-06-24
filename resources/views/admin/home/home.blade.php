 @extends('admin.master')



@section('homeContent')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <a class="dropdown-item text-primary"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="  fa fa-power-off"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
                @csrf

            </form> 
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
@endsection