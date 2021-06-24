@extends('admin.master')
@section('homeContent')

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Student</h4>
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


            @if( session()->has('success'))
{{ session('success')}}

@endif

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Students Table</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      
                                      <th scope="col">Name</th>
                                      <th scope="col">Class</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Phone</th>
                                      <th scope="col">Address</th>
                                      <th scope="col">City</th>
                                      <th scope="col">Parent Name</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    @foreach($students as $student)
                                    <tr>
                                      
                                      <td>{{$student->name}}</td>
                                      <td>{{$student->class}}</td>
                                      <td>{{$student->email}}</td>
                                      <td>{{$student->phone}}</td>
                                      <td>{{$student->address}}</td>
                                      <td>{{$student->city}}</td>
                                      <td>{{$student->parent_name}}</td>
                                      <td><a href="{{url('student/delete/'.$student->id)}}">Delete</a></td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                            </table>
                        </div>
                        
                        
                        
                    </div>
                </div>
















@endsection