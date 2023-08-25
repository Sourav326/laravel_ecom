@extends('layouts.app')
@section('content')

<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Services</h1>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique.</p>
                    <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                            class="btn btn-white-outline">Explore</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="{{asset('assets/images/couch.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="why-choose-section">
    <div class="container">


        <div class="row my-5">
            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{asset('assets/images/truck.svg')}}" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Fast &amp; Free Shipping</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{asset('assets/images/bag.svg')}}" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Easy to Shop</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{asset('assets/images/support.svg')}}" alt="Image" class="imf-fluid">
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{asset('assets/images/return.svg')}}" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Hassle Free Returns</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{asset('assets/images/truck.svg')}}" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Fast &amp; Free Shipping</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{asset('assets/images/bag.svg')}}" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Easy to Shop</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{asset('assets/images/support.svg')}}" alt="Image" class="imf-fluid">
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="{{asset('assets/images/return.svg')}}" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Hassle Free Returns</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

        </div>

    </div>
</div>


<div class="product-section pt-0">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate
                    velit imperdiet dolor tempor tristique. </p>
                <p><a href="#" class="btn">Explore</a></p>
            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="#">
                    <img src="{{asset('assets/images/product-1.png')}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Nordic Chair</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
                        <img src="{{asset('assets/images/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="#">
                    <img src="{{asset('assets/images/product-2.png')}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Kruzo Aero Chair</h3>
                    <strong class="product-price">$78.00</strong>

                    <span class="icon-cross">
                        <img src="{{asset('assets/images/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="#">
                    <img src="{{asset('assets/images/product-3.png')}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Ergonomic Chair</h3>
                    <strong class="product-price">$43.00</strong>

                    <span class="icon-cross">
                        <img src="{{asset('assets/images/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 4 -->

        </div>
    </div>
</div>


<div class="testimonial-section before-footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Testimonials</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav" aria-label="Carousel Navigation" tabindex="0">
                        <span class="prev" data-controls="prev" aria-controls="tns1" tabindex="-1"><span
                                class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next" aria-controls="tns1" tabindex="-1"><span
                                class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="tns-outer" id="tns1-ow">
                        <div class="tns-nav" aria-label="Carousel Pagination"><button data-nav="0" aria-controls="tns1"
                                style="" aria-label="Carousel Page 1" class="" tabindex="-1"></button><button
                                data-nav="1" aria-controls="tns1" style="" aria-label="Carousel Page 2" class=""
                                tabindex="-1"></button><button data-nav="2" aria-controls="tns1" style=""
                                aria-label="Carousel Page 3 (Current Slide)" class="tns-nav-active"></button></div>
                        <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide
                            <span class="current">4</span> of 3</div>
                        <div id="tns1-mw" class="tns-ovh">
                            <div class="tns-inner" id="tns1-iw">
                                <div class="testimonial-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                    id="tns1" style="transform: translate3d(-60%, 0px, 0px);">
                                    <div class="item tns-item" aria-hidden="true" tabindex="-1">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 mx-auto">

                                                <div class="testimonial-block text-center">
                                                    <blockquote class="mb-5">
                                                        <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                            odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                            Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Integer convallis
                                                            volutpat dui quis scelerisque.”</p>
                                                    </blockquote>

                                                    <div class="author-info">
                                                        <div class="author-pic">
                                                            <img src="{{asset('assets/images/person-1.png')}}" alt="Maria Jones"
                                                                class="img-fluid">
                                                        </div>
                                                        <h3 class="font-weight-bold">Maria Jones</h3>
                                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                            Inc.</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 mx-auto">

                                                <div class="testimonial-block text-center">
                                                    <blockquote class="mb-5">
                                                        <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                            odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                            Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Integer convallis
                                                            volutpat dui quis scelerisque.”</p>
                                                    </blockquote>

                                                    <div class="author-info">
                                                        <div class="author-pic">
                                                            <img src="{{asset('assets/images/person-1.png')}}" alt="Maria Jones"
                                                                class="img-fluid">
                                                        </div>
                                                        <h3 class="font-weight-bold">Maria Jones</h3>
                                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                            Inc.</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END item -->

                                    <div class="item tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 mx-auto">

                                                <div class="testimonial-block text-center">
                                                    <blockquote class="mb-5">
                                                        <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                            odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                            Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Integer convallis
                                                            volutpat dui quis scelerisque.”</p>
                                                    </blockquote>

                                                    <div class="author-info">
                                                        <div class="author-pic">
                                                            <img src="{{asset('assets/images/person-1.png')}}" alt="Maria Jones"
                                                                class="img-fluid">
                                                        </div>
                                                        <h3 class="font-weight-bold">Maria Jones</h3>
                                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                            Inc.</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END item -->

                                    <div class="item tns-item tns-slide-active" id="tns1-item2">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 mx-auto">

                                                <div class="testimonial-block text-center">
                                                    <blockquote class="mb-5">
                                                        <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                            odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                            Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Integer convallis
                                                            volutpat dui quis scelerisque.”</p>
                                                    </blockquote>

                                                    <div class="author-info">
                                                        <div class="author-pic">
                                                            <img src="{{asset('assets/images/person-1.png')}}" alt="Maria Jones"
                                                                class="img-fluid">
                                                        </div>
                                                        <h3 class="font-weight-bold">Maria Jones</h3>
                                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                            Inc.</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END item -->

                                    <div class="item tns-item" aria-hidden="true" tabindex="-1">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 mx-auto">

                                                <div class="testimonial-block text-center">
                                                    <blockquote class="mb-5">
                                                        <p>“Donec facilisis quam ut purus rutrum lobortis. Donec vitae
                                                            odio quis nisl dapibus malesuada. Nullam ac aliquet velit.
                                                            Aliquam vulputate velit imperdiet dolor tempor tristique.
                                                            Pellentesque habitant morbi tristique senectus et netus et
                                                            malesuada fames ac turpis egestas. Integer convallis
                                                            volutpat dui quis scelerisque.”</p>
                                                    </blockquote>

                                                    <div class="author-info">
                                                        <div class="author-pic">
                                                            <img src="{{asset('assets/images/person-1.png')}}" alt="Maria Jones"
                                                                class="img-fluid">
                                                        </div>
                                                        <h3 class="font-weight-bold">Maria Jones</h3>
                                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ
                                                            Inc.</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection