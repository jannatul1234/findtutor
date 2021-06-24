@extends('admin.master')
@section('homeContent')
  
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Static Table</h5>
                            </div>

@if( session()->has('success'))
{{ session('success')}}

@endif
                            <table class="table">
                                  <thead>
                                    <tr>
                                      
      <th scope="col">Student Name</th>
      <th scope="col">Class</th>
      <th scope="col">Address</th>
      <th scope="col">Phone number</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Status</th>
        <th scope="col">Action</th>                              </tr>
                                  </thead>
                                  <tbody>

                                  	@foreach($book as $book)
@php
$student=\App\Models\User::where('id',$book->student_id)->get();
@endphp
@foreach($student as $st)
@php
$teacher=\App\Models\User::where('id',$book->teacher_id)->first();
@endphp

                                    <tr>

                                      
                                      <td>{{$st->name}}</td>
                                      <td>{{$st->class}}</td>
                                      <td>{{$st->address}}</td>
                                      <td>{{$st->phone}}</td>
                                      <td>{{$teacher->name}}</td>
                                      <td>{{$teacher->subject}}</td>
                                      <td>{{$teacher->phone}}</td>
                                      <td>@if($book->status==0)
panding
@else
approved

@endif</td>
<td><a href="{{url('book/approved/'.$book->id)}}">approved</a></td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                  </tbody>
                            </table>
                        </div>
                        
                        
                        
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ===========

@endsection