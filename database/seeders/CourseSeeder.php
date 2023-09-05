<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['title' => 'The Complete javascript Course 2023, Build Real Projects','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course1 Description','status'=>'active'],
            ['title' => 'Complete React js Course 2023, With E-commerce Project','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course2 Description','status'=>'active'],
            ['title' => 'The Complete javascript Course 2023, Build Real Projects','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course1 Description','status'=>'active'],
            ['title' => 'Complete React js Course 2023, With E-commerce Project','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course2 Description','status'=>'active'],
            ['title' => 'The Complete javascript Course 2023, Build Real Projects','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course1 Description','status'=>'active'],
            ['title' => 'Complete React js Course 2023, With E-commerce Project','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course2 Description','status'=>'active'],
            ['title' => 'The Complete javascript Course 2023, Build Real Projects','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course1 Description','status'=>'active'],
            ['title' => 'Complete React js Course 2023, With E-commerce Project','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course2 Description','status'=>'active'],
            ['title' => 'The Complete javascript Course 2023, Build Real Projects','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course1 Description','status'=>'active'],
            ['title' => 'Complete React js Course 2023, With E-commerce Project','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course2 Description','status'=>'active'],
            ['title' => 'The Complete javascript Course 2023, Build Real Projects','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course1 Description','status'=>'active'],
            ['title' => 'Complete React js Course 2023, With E-commerce Project','image'=>'assets/images/courses/learn-javascript-courses.jpeg','file'=>'assets/images/courses/learn-javascript-courses.jpeg','body'=>'Course2 Description','status'=>'active'],
           
        ];
        foreach($courses as $course){

            Course::create([
                'title'=>$course['title'],
                'image'=>$course['image'],
                'file'=>$course['file'],
                'body'=>$course['body'],
                'status'=>$course['status'],
            ]);
        }
    }
}
