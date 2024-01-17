@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center py-3 bg-secondary text-light">Add Teacher</h1>
                        <h3 class="text-center text-success pt-4" id="success-msg" style="height: 40px">
                            {{ Session()->get('notification') }}</h3>
                        <form class="p-5" action="{{ route('teacher.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>                           

                            {{-- <div class="mb-3">
                                <label class="form-label">Teacher ID</label>
                                <input type="number" class="form-control" name="teacher_id">
                            </div> --}}
                            <div class="mb-3">
                                <label class="form-label">Course Code</label>
                                <input type="text" class="form-control" name="course_code">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Teacher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
