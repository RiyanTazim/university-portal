@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('teacher.create')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plis" aria-hidden="true"></i> Add New Teacher
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    {{-- <th>Teacher ID</th> --}}
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teacher as $teacher)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$teacher->name}}</td>
                                        {{-- <td>{{$teacher->teacher_id}}</td> --}}
                                        <td>{{$teacher->course_code}}</td>
                                        {{-- <td>{{$teacher->course->course_name}}</td> --}}
                                        {{-- <td>@foreach ($course as $course)
                                            <td>{{$course->course_name}}</td>
                                            @endforeach
                                        </td> --}}

                                        <td>                                                                                    
                                            <a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-warning" title="Edit">Edit</a>
                                            <a href="{{route('teacher.delete', $teacher->id)}}" class="btn btn-danger" title="delete" id="delete" onclick="return confirm('Are You Sure?')">Delete</a>
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