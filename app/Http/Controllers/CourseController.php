<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::where('status','Active')->paginate(12);
        return view('course.index',[
            'title' => 'courses',
            'courses' => $courses
        ]);

    }

     /**
     * Display the specified course.
     */
    public function show(string $id)
    {
        $course = Course::where('id',$id)->first();
        return view('course.course',['course'=>$course,'title'=>$course->title]);
    }
}
