@extends('admin.master')
@section('homeContent')

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Teacher</h4>
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
                                <h5 class="card-title m-b-0">Teachers Table</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                     <th scope="col">Name</th>
                                      <th scope="col">Subject</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Phone</th>
                                      <th scope="col">Address</th>
                                      <th scope="col">City</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
@foreach($teachers as $teacher)
                                    <tr>


                                    <tr>
                                    <td>{{$teacher->name}}</td>
                                      <td>{{$teacher->subject}}</td>
                                      <td>{{$teacher->email}}</td>
                                      <td>{{$teacher->phone}}</td>
                                      <td>{{$teacher->address}}</td>
                                      <td>{{$teacher->city}}</td>
                                       <td><a href="{{url('teacher/delete/'.$teacher->id)}}">Delete</a></td>
                                    </tr>
                                     @endforeach
                                    
                                  </tbody>
                            </table>
                        </div>
                        
                        
                        
                    </div>
                </div>
















@endsection