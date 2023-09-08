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
                <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam
                    ac
                    aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi
                    tristique senectus et netus et malesuada</p>

                <ul class="list-unstyled custom-list my-4">
                    <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    <li>Donec vitae odio quis nisl dapibus malesuada</li>
                </ul>
                <p><a href="http://127.0.0.1:8000/shop" class="btn buy-btn">Buy this course</a></p>
            </div>
            <div class="course-content py-5">
                <h2 class="section-title mb-4">Course content</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Day 1 - Beginner - Working with Variables in Python to Manage Data
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="fa-ul course-content-ul" style="--fa-li-margin: 1em;">
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>List icons
                                        can</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>be used to
                                    </li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>replace
                                        bullets</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Day 2 - Beginner - Understanding Data Types and How to Manipulate Strings
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="fa-ul course-content-ul" style="--fa-li-margin: 1em;">
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>List icons
                                        can</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>be used to
                                    </li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>replace
                                        bullets</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Day 3 - Beginner - Control Flow and Logical Operators
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="fa-ul course-content-ul" style="--fa-li-margin: 1em;">
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>List icons
                                        can</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>be used to
                                    </li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>replace
                                        bullets</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Day 4 - Beginner - Understanding Data Types and How to Manipulate Strings
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="fa-ul course-content-ul" style="--fa-li-margin: 1em;">
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>List icons
                                        can</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>be used to
                                    </li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>replace
                                        bullets</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Day 5 - Beginner - Control Flow and Logical Operators
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="fa-ul course-content-ul" style="--fa-li-margin: 1em;">
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>List icons
                                        can</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>be used to
                                    </li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>replace
                                        bullets</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Day 6 - Beginner - Understanding Data Types and How to Manipulate Strings
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="fa-ul course-content-ul" style="--fa-li-margin: 1em;">
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>List icons
                                        can</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>be used to
                                    </li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>replace
                                        bullets</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Day 7 - Beginner - Control Flow and Logical Operators
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="fa-ul course-content-ul" style="--fa-li-margin: 1em;">
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>List icons
                                        can</li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>be used to
                                    </li>
                                    <li><span class="fa-li"><i class="fa-solid fa-video"></i></span>replace
                                        bullets</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

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
                    <div class="tooltip-btns">
                        <a href="{{route('courses.show',$course->id)}}">
                            <span class="btn buy-btn">Buy thiscourse</span>
                        </a>
                        <form method="post" id="wishlistForm" action="{{route('wishlist.store')}}">
                            @csrf
                            <input type="hidden" value="{{$course->id}}" name="course_id" >
                            <div class="heart-anchor">
                                <i class="fa-regular fa-heart color-deeppink"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection