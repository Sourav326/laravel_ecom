@extends('layouts.app')
@section('content')

<div class="blog-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="section-title">My Account</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-5">
                <div class="post-entry course-entry py-4">
                    <a href="#">
                        <div class="post-content-entry course-entry">
                        <div class="d-flex justify-content-between align-items-center">
                                <h3>My Learnings <span class="item-count"> (2 items)</span></h3>
                                <i class="fa-solid fa-book my-account-icon color-green"></i>
                            </div>
                            <p class="course-category">Your Purchased Courses</p>
                            <div class="meta">
                                <span>Kristin Watson</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-5 ">
                <div class="post-entry course-entry py-4 py-4">
                    <a href="#">
                        <div class="post-content-entry course-entry">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>My Cart<span class="item-count"> (2 items)</span></h3>
                                <i class="fa-solid fa-cart-plus my-account-icon color-orangred"></i>
                            </div>
                            <p class="course-category">Your next purchase products</p>
                            <div class="meta">
                                <span>Kristin Watson</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-5 ">
                <div class="post-entry course-entry py-4 py-4">
                    <a href="#">
                        <div class="post-content-entry course-entry">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>Wishlist <span class="item-count">(2 items)</span></h3>
                                <i class="fa-regular fa-heart my-account-icon color-deeppink"></i>
                            </div>
                            <p class="course-category">Your next purchase products</p>
                            <div class="meta">
                                <span>Kristin Watson</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-5 ">
                <div class="post-entry course-entry py-4 py-4">
                    <a href="#">
                        <div class="post-content-entry course-entry">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>Notifications <span class="item-count">(2 items)</span></h3>
                                <i class="fa-solid fa-bell-slash my-account-icon color-blueviolet"></i>
                            </div>
                            <p class="course-category">Your next purchase products</p>
                            <div class="meta">
                                <span>Kristin Watson</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-5 ">
                <div class="post-entry course-entry py-4 py-4">
                    <a href="{{route('profile.edit')}}">
                        <div class="post-content-entry course-entry">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3>Edit Profile</h3>
                                <i class="fa-regular fa-id-card my-account-icon color-navy"></i>
                            </div>
                            <p class="course-category">Your next purchase products</p>
                            <div class="meta">
                                <span>Kristin Watson</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection