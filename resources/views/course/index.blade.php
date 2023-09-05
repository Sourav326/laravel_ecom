@extends('layouts.app')
@section('content')

<!-- Start Course Section -->
    <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Featured Courses</h2>
                </div>
            </div>

            <div class="row">
                @foreach($courses as $course)
                    <div class="col-12 col-sm-6 col-md-3 mb-5">
                        <div class="post-entry course-entry tultip">
                            <a href="{{route('courses.show',$course->id)}}">
                                @if($course->is_premium == 'yes')
                                    <img class="premium-course-badge" src="{{asset('assets/images/courses/premium-quality1.png')}}" width=30px>
                                @endif
                                <div class="best-selller">
                                    <div class="selller-arrow"></div>
                                    <span class="selller">&nbsp;&nbsp;Bestseller</span>
                                </div>

                                <a href="{{route('courses.show',$course->id)}}" class="post-thumbnail"><img class="course-template " src="{{asset($course->image)}}" alt="Image" class="img-fluid"></a>
                                <span class="tultip-text">
                                    <div class="post-content-entry course-entry">
                                        <p class="views-count">109k views</p>
                                        <h3><a href="{{route('courses.show',$course->id)}}">{{$course->title}}</a></h3>
                                        <p class="course-short-desc">A practical programming course for office workers, academics, and administrators who want to improve their productivity.</p>
                                        <ul class="alternating-culors">
                                            <li>You will learn how to leverage the power of Python to solve tasks</li>
                                            <li>You will build games and programs that use Python libraries.</li>
                                            <li>Programmatically generate and update Excel spreadsheets.</li>
                                        </ul>
                                        <a href="{{route('courses.show',$course->id)}}"><span class="btn">Go to course</span></a>
                                    </div>
                                </span>
                                <div class="post-content-entry course-entry">
                                    <p class="views-count">109k views</p>
                                    <h3><a href="{{route('courses.show',$course->id)}}">{{$course->title}}</a></h3>
                                    <p class="course-category">Development | Javascript</p>
                                    <div class="meta">
                                        <span>by <a href="#">Kristin Watson</a></span>
                                        @if($course->is_premium == 'yes')
                                            <a href="{{route('courses.show',$course->id)}}"><span class="course-amount">₹1999</span></a>
                                        @else
                                        <a href="{{route('courses.show',$course->id)}}"><span class="btn course-free-btn">FREE</span></a>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 
                @endforeach
                {{ $courses->links() }}
            </div>
        </div>
    </div>
		<!-- End Course Section -->	

@endsection

