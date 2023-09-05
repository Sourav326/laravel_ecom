<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            ['title' => 'Blog Title 1','image'=>'assets/images/post-1.jpg','body'=>'Blog 1 Description','status'=>'active'],
            ['title' => 'Blog Title 2','image'=>'assets/images/post-2.jpg','body'=>'Blog 2 Description','status'=>'active'],
            ['title' => 'Blog Title 3','image'=>'assets/images/post-3.jpg','body'=>'Blog 3 Description','status'=>'active'],
            ['title' => 'Blog Title 4','image'=>'assets/images/post-2.jpg','body'=>'Blog 4 Description','status'=>'active'],
            ['title' => 'Blog Title 5','image'=>'assets/images/post-3.jpg','body'=>'Blog 5 Description','status'=>'active'],
            ['title' => 'Blog Title 6','image'=>'assets/images/post-1.jpg','body'=>'Blog 6 Description','status'=>'active'],
            ['title' => 'Blog Title 1','image'=>'assets/images/post-1.jpg','body'=>'Blog 1 Description','status'=>'active'],
            ['title' => 'Blog Title 2','image'=>'assets/images/post-2.jpg','body'=>'Blog 2 Description','status'=>'active'],
            ['title' => 'Blog Title 3','image'=>'assets/images/post-3.jpg','body'=>'Blog 3 Description','status'=>'active'],
            ['title' => 'Blog Title 4','image'=>'assets/images/post-2.jpg','body'=>'Blog 4 Description','status'=>'active'],
            ['title' => 'Blog Title 5','image'=>'assets/images/post-3.jpg','body'=>'Blog 5 Description','status'=>'active'],
            ['title' => 'Blog Title 6','image'=>'assets/images/post-1.jpg','body'=>'Blog 6 Description','status'=>'active'],
            ['title' => 'Blog Title 1','image'=>'assets/images/post-1.jpg','body'=>'Blog 1 Description','status'=>'active'],
            ['title' => 'Blog Title 2','image'=>'assets/images/post-2.jpg','body'=>'Blog 2 Description','status'=>'active'],
            ['title' => 'Blog Title 3','image'=>'assets/images/post-3.jpg','body'=>'Blog 3 Description','status'=>'active'],
            ['title' => 'Blog Title 4','image'=>'assets/images/post-2.jpg','body'=>'Blog 4 Description','status'=>'active'],
            ['title' => 'Blog Title 5','image'=>'assets/images/post-3.jpg','body'=>'Blog 5 Description','status'=>'active'],
            ['title' => 'Blog Title 6','image'=>'assets/images/post-1.jpg','body'=>'Blog 6 Description','status'=>'active'],
           
        ];
        foreach($blogs as $blog){

            Blog::create([
                'title'=>$blog['title'],
                'image'=>$blog['image'],
                'body'=>$blog['body'],
                'status'=>$blog['status'],
            ]);
        }
    }
}
