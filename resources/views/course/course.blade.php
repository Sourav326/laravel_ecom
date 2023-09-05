@extends('layouts.app')
@section('content')
<div class="scroll-fixed-bar">
    <span class="fixed-title">{{$course->title}}</span><br>
    <span class="student-count">45678 Students</span>
</div>
<div class="course-detail-main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 top-head-first">
                <h1>{{$course->title}}</h1>
                <p class="course-detail-short-desc">Learn Python with projects covering game & web development, web
                    scraping, MongoDB, Django, PyQt, and data visualization!</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="course-detail-thumbnail"><img src="{{asset($course->image)}}" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-5">
        <div class="col-lg-8 top-head-first"> 
            <div class="what-you-learn p-5">
                <h2 class="section-title mb-4">What you will learn in this course</h2>
                <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac
                    aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi
                    tristique senectus et netus et malesuada</p>
        
                <ul class="list-unstyled custom-list my-4">
                    <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    <li>Donec vitae odio quis nisl dapibus malesuada</li>
                </ul>
                <p><a href="http://127.0.0.1:8000/shop" class="btn">Explore</a></p>
            </div>
        </div>
        <div class="col-lg-4" style="position:relative"> 
        <div class="course-detail-sidebar-fixed p-5">
                <div class="feature">
                    <div class="icon">
                        <img src="http://127.0.0.1:8000/assets/images/truck.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Fast &amp; Free Shipping</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const bar = document.querySelector('.scroll-fixed-bar');
    const fixedSidebar = document.querySelector('.course-detail-sidebar-fixed');
    window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    const scrollThreshold = 300;
    const scrollThresholdForFixSidebar = 440;

    if (scrollY > scrollThreshold) {
        bar.classList.add('scroll-fixed-bar-show');
    } else {
        bar.classList.remove('scroll-fixed-bar-show');
    }


    if (scrollY > scrollThresholdForFixSidebar) {
        fixedSidebar.classList.add('course-detail-sidebar-fixed-after-scroll');
    } else {
        fixedSidebar.classList.remove('course-detail-sidebar-fixed-after-scroll');
    }
});
</script>

@endsection