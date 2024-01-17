<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeacherController extends Controller
{
    public function index() : View
    {
        $teacher = Teacher::all();
        $course = Course::all();
        return view('teacher.index', compact('teacher', 'course'));
    }

    public function create()
    {        
        return view('teacher.create');
    }
    public function store(Request $request)
    {        
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->course_code = $request->course_code;

        $teacher->save();
        return redirect()->route('teacher.list')->with('notification', 'Teacher Added');
    }
    public function edit($id)
    {        
        $teacher = Teacher::find($id);
        return view('teacher.edit', compact('teacher'));
    }
    public function update(Request $request, $id)
    {        
        $teacher = Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->course_code = $request->course_code;
        
        $teacher->save();
        return redirect()->route('teacher.list')->with('notification', 'Teacher Updated');
    }
    public function delete($id)
    {        
        $teacher = Teacher::find($id);

        $teacher->delete();
        return redirect()->route('teacher.list')->with('notification', 'Teacher Deleted');
    }
}
