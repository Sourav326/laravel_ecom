<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::where('status','Active')->paginate(4);
        return view('course.index',[
            'title' => 'courses',
            'courses' => $courses
        ]);

    }
}
