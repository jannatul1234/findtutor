@extends('fontend.master')
@section('homeContent')

<div class="page-wrapper">

<div class="row">

  <div class="col-md-2" style="margin-top: 100px;">
    

@include('sidebar')


  </div>
   <div class="col-md-10">
     




            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
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
                                <h5 class="card-title m-b-0">History</h5>
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
                                 </tr>
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


   </div>





</div>











            <!-- ===========

@endsection