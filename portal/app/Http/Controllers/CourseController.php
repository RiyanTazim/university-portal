<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() : View
    {
        $course = Course::all();
        return view('course.index')->with('course', $course);
    }

    public function create()
    {        
        return view('course.create');
    }
    public function store(Request $request)
    {        
        $course = new Course();
        $course->course_name = $request->course_name;
        $course->course_code = $request->course_code;

        $course->save();
        return redirect()->route('course.list')->with('notification', 'Course Added');
    }
    public function edit($id)
    {        
        $course = Course::find($id);
        return view('course.edit', compact('course'));
    }
    public function update(Request $request, $id)
    {        
        $course = Course::find($id);
        $course->course_name = $request->course_name;
        $course->course_code = $request->course_code;

        $course->save();
        return redirect()->route('course.list')->with('notification', 'Course Updated');
    }
    public function delete($id)
    {        
        $course = Course::find($id);

        $course->delete();
        return redirect()->route('course.list')->with('notification', 'Course Deleted');
    }
}
