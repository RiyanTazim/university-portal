@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center py-3 bg-secondary text-light">Add Student</h1>
                        <h3 class="text-center text-success pt-4" id="success-msg" style="height: 40px">
                            {{ Session()->get('notification') }}</h3>
                        <form class="p-5" action="{{ route('student.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="mobile">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Teacher Name</label>
                                {{-- <input type="number" class="form-control" name="teacher_id"> --}}
                                <select type="text" class="form-control" name="teacher_id">
                                    <option selected>Select Teacher</option>
                                    @foreach ($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                    @endforeach
                                    
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Course Name</label>
                                {{-- <input type="number" class="form-control" name="course_id"> --}}
                                <select type="text" class="form-control" name="course_id">
                                    <option selected>Select Course</option>
                                    @foreach ($courses as $course)
                                    <option value="{{$course->id}}">{{$course->course_name}}</option>
                                    @endforeach
                                    
                                  </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
