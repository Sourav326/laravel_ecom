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
                    <div class="col-12 col-sm-6 col-md-4 mb-5">
                        <div class="post-entry course-entry">
                            <a href="#">
                                @if($course->is_premium == 'yes')
                                    <img class="premium-course-badge" src="{{asset('assets/images/courses/premium-quality1.png')}}" width=30px>
                                @endif
                                <span class="best-selller">Bestseller</span>
                                <a href="#" class="post-thumbnail"><img src="{{asset($course->image)}}" alt="Image" class="img-fluid"></a>
                                <div class="post-content-entry course-entry">
                                    <p class="views-count">109k views</p>
                                    <h3><a href="#">{{$course->title}}</a></h3>
                                    <p class="course-category">Development | Javascript</p>
                                    <div class="meta">
                                        <span>by <a href="#">Kristin Watson</a></span>
                                        @if($course->is_premium == 'yes')
                                            <span class="course-amount">₹1999</span>
                                        @else
                                            <span class="btn course-free-btn">FREE</span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </div>
		<!-- End Course Section -->	

@endsection

