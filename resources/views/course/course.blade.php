@extends('layouts.app')
@section('content')
<div class="course-detail-main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 mb-5">
                <h1>{{$course->title}}</h1>
            </div>
            <div class="col-12 col-md-4 mb-5">
                 <a href="{{route('courses.show',$course->id)}}" class="post-thumbnail"><img class="course-template " src="{{asset($course->image)}}" alt="Image" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>

@endsection

