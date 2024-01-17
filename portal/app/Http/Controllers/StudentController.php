<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::all();
        return view('student.index')->with('students', $students);
    }

    public function create()
    {
        return view('student.create',
            ['teachers' => Teacher::all(),
                'courses' => Course::all(),
            ]);
    }
    public function store(Request $request)
    { 
      
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->teacher_id = $request->teacher_id;
        $student->course_id = $request->course_id;

        $student->save();
        return redirect()->route('student.list')->with('notification', 'Student Added');
    }
    public function edit($id)
    {
        $student = Student::find($id);
        $teachers = Teacher::all();
        $courses = Course::all();
        return view('student.edit', compact('student', 'teachers', 'courses'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->teacher_id = $request->teacher_id;
        $student->course_id = $request->course_id;

        $student->save();
        return redirect()->route('student.list')->with('notification', 'Student Updated');
    }
    public function delete($id)
    {
        $student = Student::find($id);

        $student->delete();
        return redirect()->route('student.list')->with('notification', 'Student Deleted');
    }

}
