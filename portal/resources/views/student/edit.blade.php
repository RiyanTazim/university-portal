@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center py-3 bg-secondary text-light">Edit Student</h1>
                        <h3 class="text-center text-success pt-4" id="success-msg" style="height: 40px">
                            {{ Session()->get('notification') }}</h3>
                        <form class="p-5" action="{{ route('student.update', $student->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $student->address }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control" name="mobile" value="{{ $student->mobile }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Teacher Name</label>
                                {{-- <input type="number" class="form-control" name="teacher_id" value="{{$student->teacher_id}}"> --}}
                                <select type="text" class="form-control" name="teacher_id" >
                                    <option selected>Select Teacher</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}"{{ $teacher->id == $student->teacher_id ? 'selected':''}}>{{ $teacher->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Course Name</label>
                                {{-- <input type="number" class="form-control" name="course_id"
                                    value="{{ $student->course_id }}"> --}}
                                <select type="text" class="form-control" name="course_id" >
                                    <option selected>Select Course</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}"{{$course->id == $student->course_id ?'selected':''}}>{{ $course->course_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
