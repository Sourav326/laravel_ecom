@extends('layouts.app')

@section('content')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">

            <!-- Start Column -->
        @foreach($products as $product)
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="{{route('shop.show',$product->id)}}">
                    <img src="{{asset($product->image)}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">{{$product->title}}</h3>
                    <strong class="product-price">${{$product->price}}.00</strong>

                    <span class="icon-cross">
                        <img src="{{asset('assets/images/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
        @endforeach    
            <!-- End Column-->


           

        </div>
    </div>
</div>


@endsection