<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

class CourseController extends Controller
{
    public function courses(Request $request)
    {
        return view('courses');
    }

    public function course(Request $request, $subdomain)
    {
        $course = Course::where('subdomain', '=', $subdomain)->firstOrFail();
        $user = User::find($course->user_id);
        return view('course.index', compact('course', 'user'));
    }

    public function create(Request $request)
    {
        return view('courses.create');
    }

    public function create_course(Request $request)
    {
        $newCourse = new Course();
        $newCourse->name = $request->name;
        $newCourse->subdomain = $request->subdomain;
        $newCourse->headline = $request->headline;
        $newCourse->primary_color = $request->primary_color;
        $newCourse->user_id = auth()->user()->id;
        $newCourse->save();

        return redirect('courses')->with(['alert' => 'Successfully created your course', 'alert_type' => 'success']);
    }
}