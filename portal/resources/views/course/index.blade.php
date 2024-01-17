@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('course.create')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plis" aria-hidden="true"></i> Add New Course
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($course as $course)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$course->course_name}}</td>
                                        <td>{{$course->course_code}}</td>

                                        <td>                                                                                    
                                            <a href="{{route('course.edit', $course->id)}}" class="btn btn-warning" title="Edit">Edit</a>
                                            <a href="{{route('course.delete', $course->id)}}" class="btn btn-danger" title="delete" id="delete" onclick="return confirm('Are You Sure?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection