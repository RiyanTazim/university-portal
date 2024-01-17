@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                
                    <div class="card-header">
                        <a href="{{ route('student.create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plis" aria-hidden="true"></i> Add New Student
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Teacher Name</th>
                                        <th>Course Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->address }}</td>
                                            <td>{{ $student->mobile }}</td>
                                            <td>{{ $student->teacher->name}}</td>
                                            <td>{{ $student->course->course_name}}</td>

                                            <td>
                                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning"
                                                    title="Edit">Edit</a>
                                                <a href="{{ route('student.delete', $student->id) }}" class="btn btn-danger"
                                                    title="delete" onclick="return confirm('Are You Sure?')" id="delete">Delete</a>
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
@endsection
